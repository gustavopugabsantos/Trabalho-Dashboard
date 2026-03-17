<?php
$nomeUsuario = "gustavo@email.com";

$usuarios = [
    ["id" => 1, "nome" => "Gustavo Puga", "email" => "gustavo@email.com", "cargo" => "Bolador oficial"],
    ["id" => 2, "nome" => "Kayky Leitão", "email" => "KaykyLeitao@gov.br", "cargo" => "Gordin saliente"],
    ["id" => 3, "nome" => "João Amaral Pikinha", "email" => "joaoamaralpikinha@gmail.com", "cargo" => "Boiola"],
    ["id" => 4, "nome" => "Guilherme Acala", "email" => "guilhermeacala@gmail.com", "cargo" => "Mandar msg pra mulher dele a cada 5 segundos"]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="layout">
        <aside class="sidebar">
            <div class="logo">Meu Painel</div>

            <nav class="menu">
                <a href="dashboard.php" class="menu-item">Dashboard</a>
                <a href="usuarios.php" class="menu-item active">Usuários</a>
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
                <h1>Usuários</h1>
                <p>Lista de usuários cadastrados</p>
            </header>

            <section class="panel">
                <div class="table-header">
                    <h2>Gerenciamento de usuários</h2>
                    <a href="dashboard.php" class="btn">Voltar para Dashboard</a>
                </div>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Cargo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $usuario): ?>
                                <tr>
                                    <td><?php echo $usuario["id"]; ?></td>
                                    <td><?php echo $usuario["nome"]; ?></td>
                                    <td><?php echo $usuario["email"]; ?></td>
                                    <td><?php echo $usuario["cargo"]; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

</body>
</html>