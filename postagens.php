<?php
session_start();

$usuarioLogado = "Puga";
$paginaAtual = "postagens";

/* cria array se não existir */
if (!isset($_SESSION['postagens'])) {
    $_SESSION['postagens'] = [];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Postagens</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="layout">
<?php include 'menu.php'; ?>

<main class="content">

    <div class="panel-header">
        <h1>Postagens</h1>
        <a href="nova-postagem.php" class="btn">Nova postagem</a>
    </div>

    <div class="panel">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Conteúdo</th>
                </tr>
            </thead>

            <tbody>
                <?php if (empty($_SESSION['postagens'])): ?>
                    <tr>
                        <td colspan="3">Nenhuma postagem ainda</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($_SESSION['postagens'] as $post): ?>
                        <tr>
                            <td><?php echo $post['id']; ?></td>
                            <td><?php echo $post['titulo']; ?></td>
                            <td><?php echo $post['conteudo']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</main>
</div>

<?php include 'footer.php'; ?>
</body>
</html>