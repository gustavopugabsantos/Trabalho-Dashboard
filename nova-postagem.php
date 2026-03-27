<?php
$usuarioLogado = "Puga";
$paginaAtual = "postagens";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nova Postagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="layout">
<?php include 'menu.php'; ?>

<main class="content">

    <h1>Nova Postagem</h1>

    <div class="panel">
        <form action="salvar-postagem.php" method="POST">

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" required>
            </div>

            <div class="form-group">
                <label for="conteudo">Conteúdo</label>
                <textarea name="conteudo" id="conteudo" required></textarea>
            </div>

            <button class="btn">Publicar</button>

        </form>
    </div>

</main>
</div>

</body>
</html>