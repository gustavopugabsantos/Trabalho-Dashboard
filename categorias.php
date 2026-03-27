<?php
$usuarioLogado = "Puga";
$paginaAtual = "categorias";

$arquivo = 'categorias.json';

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}

$conteudo = file_get_contents($arquivo);
$categorias = json_decode($conteudo, true);

if (!is_array($categorias)) {
    $categorias = [];
}
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
            <p>Lista de categorias cadastradas</p>
        </header>

        <section class="panel">
            <div class="panel-header">
                <div>
                    <h2>Gerenciamento de categorias</h2>
                    <p class="panel-subtitle">Organização das categorias do conteúdo</p>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($categorias)): ?>
                            <tr>
                                <td colspan="4">Nenhuma categoria ainda</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($categorias as $categoria): ?>
                                <tr>
                                    <td><?php echo $categoria["id"]; ?></td>
                                    <td><?php echo htmlspecialchars($categoria["nome"]); ?></td>
                                    <td><?php echo htmlspecialchars($categoria["descricao"]); ?></td>
                                    <td>
                                        <span class="status <?php echo strtolower($categoria["status"]); ?>">
                                            <?php echo htmlspecialchars($categoria["status"]); ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>
</body>
</html>