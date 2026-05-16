<?php
session_start();
$usuarioLogado = $_SESSION['usuario'] ?? 'Puga';
$paginaAtual = "usuarios";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="layout">
    <?php include 'menu.php'; ?>

    <main class="content">
        <header class="page-header">
            <h1 data-form-title data-edit-text="Editar Usuário">Novo Usuário</h1>
            <p>Preencha os dados para salvar no localStorage</p>
        </header>

        <section class="panel form-panel">
            <form id="usuario-form">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite o nome" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Digite o e-mail" required>
                </div>

                <div class="form-group">
                    <label for="cargo">Cargo</label>
                    <input type="text" name="cargo" id="cargo" placeholder="Ex: Administrador" required>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status">
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>

                <div class="actions">
                    <a href="usuarios.php" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn" data-edit-text="Atualizar">Salvar</button>
                </div>
            </form>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>
<script src="app.js"></script>
</body>
</html>
