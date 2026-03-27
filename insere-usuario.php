<?php
$usuarioLogado = "Puga";
$paginaAtual = "usuarios";

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$cargo = $_POST['cargo'] ?? '';
$status = $_POST['status'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário Cadastrado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="layout">
    <?php include 'menu.php'; ?>

    <main class="content">
        <header class="page-header">
            <h1>Usuário cadastrado</h1>
            <p>Confira os dados recebidos pelo método POST</p>
        </header>

        <section class="panel">
            <h2>Dados informados</h2>
            <div class="result-list">
                <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                <p><strong>Cargo:</strong> <?php echo htmlspecialchars($cargo); ?></p>
                <p><strong>Status:</strong> 
                    <span class="status <?php echo strtolower($status); ?>">
                        <?php echo htmlspecialchars($status); ?>
                    </span>
                </p>
            </div>

            <div class="actions">
                <a href="cadastro.php" class="btn btn-secondary">Voltar</a>
                <a href="usuarios.php" class="btn">Ir para usuários</a>
            </div>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
