<?php
session_start();
$usuarioLogado = $_SESSION['usuario'] ?? 'Puga';
$paginaAtual = "postagens";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Postagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="layout">
    <?php include 'menu.php'; ?>

    <main class="content">
        <header class="page-header">
            <h1 data-form-title data-edit-text="Editar Postagem">Nova Postagem</h1>
            <p>Preencha os dados para salvar no localStorage</p>
        </header>

        <section class="panel form-panel">
            <form id="postagem-form">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" id="titulo" placeholder="Digite o título" required>
                </div>

                <div class="form-group">
                    <label for="conteudo">Conteúdo</label>
                    <textarea name="conteudo" id="conteudo" rows="8" placeholder="Digite o conteúdo da postagem" required></textarea>
                </div>

                <div class="actions">
                    <a href="postagens.php" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn" data-edit-text="Atualizar">Publicar</button>
                </div>
            </form>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>
<script src="app.js"></script>
</body>
</html>
