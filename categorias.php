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
    <title>Categorias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="layout">
    <?php include 'menu.php'; ?>

    <main class="content">
        <header class="page-header">
            <h1>Categorias</h1>
            <p>CRUD de categorias salvo no localStorage</p>
        </header>

        <section class="panel">
            <div class="panel-header">
                <div>
                    <h2>Gerenciamento de categorias</h2>
                    <p class="panel-subtitle">Crie, edite e exclua categorias</p>
                </div>
                <a href="nova-categoria.php" class="btn">Nova categoria</a>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="categorias-tbody"></tbody>
                </table>
            </div>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>
<script src="app.js"></script>
</body>
</html>
