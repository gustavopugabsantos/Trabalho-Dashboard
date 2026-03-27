<?php
session_start();

$usuarioLogado = "Puga";
$paginaAtual = "postagens";

if (!isset($_SESSION['postagens'])) {
    $_SESSION['postagens'] = [];
}
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
            <p>Gerencie e publique conteúdos</p>
        </header>

        <section class="panel">
            <div class="panel-header">
                <div>
                    <h2>Gerenciamento de postagens</h2>
                    <p class="panel-subtitle">Crie novas publicações e veja a lista abaixo</p>
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
                                    <td><?php echo htmlspecialchars($post['titulo']); ?></td>
                                    <td><?php echo htmlspecialchars($post['conteudo']); ?></td>
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
