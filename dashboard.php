<?php
$usuarioLogado = "Puga";
$paginaAtual = "dashboard";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="layout">
    <?php include 'menu.php'; ?>

    <main class="content">
        <header class="page-header">
            <h1>Dashboard</h1>
            <p>Visão geral do sistema</p>
        </header>

        <section class="stats-grid">
            <div class="stat-card">
                <h2>702334</h2>
                <p>Usuários cadastrados</p>
            </div>

            <div class="stat-card">
                <h2>Todos</h2>
                <p>Pedidos hoje</p>
            </div>

            <div class="stat-card">
                <h2>R$Muito</h2>
                <p>Faturamento</p>
            </div>

            <div class="stat-card">
                <h2>4568</h2>
                <p>Novas mensagens</p>
            </div>
        </section>

        <section class="panel">
            <h2>Resumo</h2>
            <p>
                Essa é a página principal da dashboard. Aqui você pode colocar gráficos,
                relatórios, métricas e atalhos do sistema.
            </p>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
