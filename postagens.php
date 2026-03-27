<?php
$usuarioLogado = "Puga";
$paginaAtual = "postagens";

$postagens = [
    ["id" => 1, "titulo" => "Lançamento do novo sistema", "autor" => "Gustavo Puga", "data" => "23/03/2026", "status" => "Publicado"],
    ["id" => 2, "titulo" => "Atualização do painel", "autor" => "João Silva", "data" => "22/03/2026", "status" => "Rascunho"],
    ["id" => 3, "titulo" => "Novidades da plataforma", "autor" => "Maria Souza", "data" => "21/03/2026", "status" => "Publicado"],
    ["id" => 4, "titulo" => "Melhorias de desempenho", "autor" => "Carlos Lima", "data" => "20/03/2026", "status" => "Pendente"]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="layout">
    <?php include 'componentes/menu.php'; ?>

    <main class="content">
        <header class="page-header">
            <h1>Postagens</h1>
            <p>Lista de postagens cadastradas</p>
        </header>

        <section class="panel">
            <div class="panel-header">
                <div>
                    <h2>Gerenciamento de postagens</h2>
                    <p class="panel-subtitle">Controle completo das publicações do sistema</p>
                </div>
                <a href="#" class="btn">Nova postagem</a>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Data</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($postagens as $postagem): ?>
                            <tr>
                                <td><?php echo $postagem["id"]; ?></td>
                                <td><?php echo $postagem["titulo"]; ?></td>
                                <td><?php echo $postagem["autor"]; ?></td>
                                <td><?php echo $postagem["data"]; ?></td>
                                <td>
                                    <span class="status <?php echo strtolower($postagem["status"]); ?>">
                                        <?php echo $postagem["status"]; ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</div>

<?php include 'componentes/footer.php'; ?>
</body>
</html>
