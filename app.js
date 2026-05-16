const DB_KEYS = {
  usuarios: 'dashboard_usuarios',
  postagens: 'dashboard_postagens',
  categorias: 'dashboard_categorias'
};

const seedData = {
  usuarios: [
    { id: 1, nome: 'Gustavo Puga', email: 'gustavo@email.com', cargo: 'Administrador', status: 'Ativo' },
    { id: 2, nome: 'João Silva', email: 'joao@email.com', cargo: 'Editor', status: 'Ativo' },
    { id: 3, nome: 'Kayky Souza', email: 'kayky@email.com', cargo: 'Autor', status: 'Inativo' },
    { id: 4, nome: 'Guilherme Lima', email: 'guilherme@email.com', cargo: 'Moderador', status: 'Ativo' }
  ],
  postagens: [],
  categorias: []
};

function getItems(type) {
  const key = DB_KEYS[type];
  if (!key) return [];

  const saved = localStorage.getItem(key);
  if (saved) {
    try {
      return JSON.parse(saved) || [];
    } catch (error) {
      return [];
    }
  }

  const initialData = seedData[type] || [];
  localStorage.setItem(key, JSON.stringify(initialData));
  return initialData;
}

function saveItems(type, items) {
  localStorage.setItem(DB_KEYS[type], JSON.stringify(items));
}

function nextId(items) {
  if (!items.length) return 1;
  return Math.max(...items.map(item => Number(item.id) || 0)) + 1;
}

function escapeHTML(value = '') {
  return String(value)
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;')
    .replace(/'/g, '&#039;');
}

function getQueryParam(name) {
  return new URLSearchParams(window.location.search).get(name);
}

function fillForm(form, data) {
  Object.entries(data).forEach(([key, value]) => {
    const field = form.querySelector(`[name="${key}"]`);
    if (field) field.value = value;
  });
}

function setupCrudForm({ type, formId, redirectUrl, fields }) {
  const form = document.getElementById(formId);
  if (!form) return;

  const editId = getQueryParam('editar');
  const title = document.querySelector('[data-form-title]');
  const submitButton = form.querySelector('[type="submit"]');

  if (editId) {
    const item = getItems(type).find(item => String(item.id) === String(editId));
    if (item) {
      fillForm(form, item);
      if (title) title.textContent = title.dataset.editText || 'Editar registro';
      if (submitButton) submitButton.textContent = submitButton.dataset.editText || 'Atualizar';
    }
  }

  form.addEventListener('submit', event => {
    event.preventDefault();

    const formData = new FormData(form);
    const items = getItems(type);
    const payload = { id: editId ? Number(editId) : nextId(items) };

    fields.forEach(field => {
      payload[field] = String(formData.get(field) || '').trim();
    });

    if (editId) {
      const index = items.findIndex(item => String(item.id) === String(editId));
      if (index >= 0) items[index] = payload;
    } else {
      items.push(payload);
    }

    saveItems(type, items);
    window.location.href = redirectUrl;
  });
}

function deleteItem(type, id) {
  if (!confirm('Tem certeza que deseja excluir este registro?')) return;
  const items = getItems(type).filter(item => String(item.id) !== String(id));
  saveItems(type, items);
  window.location.reload();
}

function renderUsuarios() {
  const tbody = document.getElementById('usuarios-tbody');
  if (!tbody) return;

  const usuarios = getItems('usuarios');
  if (!usuarios.length) {
    tbody.innerHTML = '<tr><td colspan="6">Nenhum usuário ainda</td></tr>';
    return;
  }

  tbody.innerHTML = usuarios.map(usuario => `
    <tr>
      <td>${usuario.id}</td>
      <td>${escapeHTML(usuario.nome)}</td>
      <td>${escapeHTML(usuario.email)}</td>
      <td>${escapeHTML(usuario.cargo)}</td>
      <td><span class="status ${escapeHTML(usuario.status).toLowerCase()}">${escapeHTML(usuario.status)}</span></td>
      <td class="table-actions">
        <a class="btn btn-small" href="cadastro.php?editar=${usuario.id}">Editar</a>
        <button class="btn btn-danger btn-small" type="button" onclick="deleteItem('usuarios', ${usuario.id})">Excluir</button>
      </td>
    </tr>
  `).join('');
}

function renderPostagens() {
  const tbody = document.getElementById('postagens-tbody');
  if (!tbody) return;

  const postagens = getItems('postagens');
  if (!postagens.length) {
    tbody.innerHTML = '<tr><td colspan="4">Nenhuma postagem ainda</td></tr>';
    return;
  }

  tbody.innerHTML = postagens.map(post => `
    <tr>
      <td>${post.id}</td>
      <td>${escapeHTML(post.titulo)}</td>
      <td>${escapeHTML(post.conteudo)}</td>
      <td class="table-actions">
        <a class="btn btn-small" href="nova-postagem.php?editar=${post.id}">Editar</a>
        <button class="btn btn-danger btn-small" type="button" onclick="deleteItem('postagens', ${post.id})">Excluir</button>
      </td>
    </tr>
  `).join('');
}

function renderCategorias() {
  const tbody = document.getElementById('categorias-tbody');
  if (!tbody) return;

  const categorias = getItems('categorias');
  if (!categorias.length) {
    tbody.innerHTML = '<tr><td colspan="5">Nenhuma categoria ainda</td></tr>';
    return;
  }

  tbody.innerHTML = categorias.map(categoria => `
    <tr>
      <td>${categoria.id}</td>
      <td>${escapeHTML(categoria.nome)}</td>
      <td>${escapeHTML(categoria.descricao)}</td>
      <td><span class="status ${escapeHTML(categoria.status).toLowerCase()}">${escapeHTML(categoria.status)}</span></td>
      <td class="table-actions">
        <a class="btn btn-small" href="nova-categoria.php?editar=${categoria.id}">Editar</a>
        <button class="btn btn-danger btn-small" type="button" onclick="deleteItem('categorias', ${categoria.id})">Excluir</button>
      </td>
    </tr>
  `).join('');
}

function renderDashboardStats() {
  const usuarios = getItems('usuarios');
  const postagens = getItems('postagens');
  const categorias = getItems('categorias');

  const activeUsers = usuarios.filter(usuario => usuario.status === 'Ativo').length;

  const setText = (id, value) => {
    const element = document.getElementById(id);
    if (element) element.textContent = value;
  };

  setText('total-usuarios', usuarios.length);
  setText('total-postagens', postagens.length);
  setText('total-categorias', categorias.length);
  setText('usuarios-ativos', activeUsers);
}

function setupGoalButton() {
  const form = document.getElementById('goal-form');
  const result = document.getElementById('goal-result');
  const input = document.getElementById('goal-input');
  if (!form || !result || !input) return;

  const savedGoal = localStorage.getItem('dashboard_meta');
  if (savedGoal) result.textContent = savedGoal;

  form.addEventListener('submit', event => {
    event.preventDefault();
    const goal = input.value.trim();
    if (!goal) return;
    localStorage.setItem('dashboard_meta', goal);
    result.textContent = goal;
    input.value = '';
  });
}

function cadastrarCategorias() {
  const quantidade = Number(prompt('Quantas categorias você deseja cadastrar?'));
  if (!quantidade || quantidade < 1) return;

  const categorias = getItems('categorias');

  for (let i = 1; i <= quantidade; i++) {
    const nome = prompt('Digite o nome da categoria ' + i + ':');
    if (!nome) continue;

    categorias.push({
      id: nextId(categorias),
      nome: nome.trim(),
      descricao: 'Categoria cadastrada pelo cadastro múltiplo',
      status: 'Ativo'
    });
  }

  saveItems('categorias', categorias);
  alert('Categorias cadastradas com sucesso!');
  window.location.href = 'categorias.php';
}

document.addEventListener('DOMContentLoaded', () => {
  renderUsuarios();
  renderPostagens();
  renderCategorias();
  renderDashboardStats();
  setupGoalButton();

  setupCrudForm({ type: 'usuarios', formId: 'usuario-form', redirectUrl: 'usuarios.php', fields: ['nome', 'email', 'cargo', 'status'] });
  setupCrudForm({ type: 'postagens', formId: 'postagem-form', redirectUrl: 'postagens.php', fields: ['titulo', 'conteudo'] });
  setupCrudForm({ type: 'categorias', formId: 'categoria-form', redirectUrl: 'categorias.php', fields: ['nome', 'descricao', 'status'] });
});
