<?php
$nomeUsuario = "Puga";
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
        <aside class="sidebar">
            <div class="logo">Meu Painel</div>

            <nav class="menu">
                <a href="dashboard.php" class="menu-item active">Dashboard</a>
                <a href="usuarios.php" class="menu-item">Usuários</a>
                <a href="#" class="menu-item">Relatórios</a>
                <a href="#" class="menu-item">Configurações</a>
            </nav>

            <div class="user-box">
                <span>Logado como:</span>
                <strong><?php echo $nomeUsuario; ?></strong>
            </div>
        </aside>

        <main class="content">
            <header class="topbar">
                <h1>Dashboard</h1>
                <p>Visão geral do sistema</p>
            </header>

            <section class="cards">
                <div class="card">
                    <h2>120</h2>
                    <p>Usuários cadastrados</p>
                </div>

                <div class="card">
                    <h2>35</h2>
                    <p>Pedidos hoje</p>
                </div>

                <div class="card">
                    <h2>R$ 4.850</h2>
                    <p>Faturamento</p>
                </div>

                <div class="card">
                    <h2>8</h2>
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

</body>
</html>