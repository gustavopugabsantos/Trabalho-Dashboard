<?php
session_start();
$usuarioLogado = $_SESSION['usuario'] ?? 'Puga';
$paginaAtual = "categorias";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Categoria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="layout">
    <?php include 'menu.php'; ?>

    <main class="content">
        <header class="page-header">
            <h1 data-form-title data-edit-text="Editar Categoria">Nova Categoria</h1>
            <p>Cadastre uma nova categoria no localStorage</p>
        </header>

        <section class="panel form-panel">
            <form id="categoria-form">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" required>
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao" required></textarea>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status">
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>

                <div class="actions">
                    <a href="categorias.php" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn" data-edit-text="Atualizar">Salvar</button>
                    <button type="button" class="btn btn-secondary" onclick="cadastrarCategorias()">Cadastro Múltiplo</button>
                </div>
            </form>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>
<script src="app.js"></script>
</body>
</html>
