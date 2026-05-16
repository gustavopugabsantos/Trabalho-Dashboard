<?php
session_start();

if (!isset($_SESSION['logado'])) {
    header('Location: index.php');
    exit;
}

$usuarioLogado = $_SESSION['usuario'] ?? 'Puga';
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
        <?php require_once __DIR__ . '/menu.php'; ?>

        <main class="content">
            <header class="page-header">
                <h1>Dashboard</h1>
                <p>Visão geral do sistema</p>
            </header>

            <section class="stats-grid">
                <div class="stat-card">
                    <h2 id="total-usuarios">0</h2>
                    <p>Usuários cadastrados</p>
                </div>

                <div class="stat-card">
                    <h2 id="total-postagens">0</h2>
                    <p>Postagens cadastradas</p>
                </div>

                <div class="stat-card">
                    <h2 id="total-categorias">0</h2>
                    <p>Categorias cadastradas</p>
                </div>

                <div class="stat-card">
                    <h2 id="usuarios-ativos">0</h2>
                    <p>Usuários ativos</p>
                </div>
            </section>

            <section class="panel">
                <h2>Meta da Dashboard</h2>
                <p class="panel-subtitle">Crie uma meta para esse mês!</p>

                <form id="goal-form" class="inline-form">
                    <input type="text" id="goal-input" placeholder="Ex: bater 100 postagens este mês" required>
                    <button type="submit" class="btn">Salvar meta</button>
                </form>

                <div class="goal-box">
                    <strong>Meta atual:</strong>
                    <span id="goal-result">Nenhuma meta cadastrada</span>
                </div>
            </section>
        </main>
    </div>

    <?php require_once __DIR__ . '/footer.php'; ?>
    <script src="app.js"></script>
</body>
</html>
