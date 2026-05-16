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
    <title>Postagens</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="layout">
    <?php include 'menu.php'; ?>

    <main class="content">
        <header class="page-header">
            <h1>Postagens</h1>
            <p>CRUD de postagens salvo no localStorage</p>
        </header>

        <section class="panel">
            <div class="panel-header">
                <div>
                    <h2>Gerenciamento de postagens</h2>
                    <p class="panel-subtitle">Crie, edite e exclua publicações</p>
                </div>
                <a href="nova-postagem.php" class="btn">Nova postagem</a>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Conteúdo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="postagens-tbody"></tbody>
                </table>
            </div>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>
<script src="app.js"></script>
</body>
</html>
