<?php
$usuarioLogado = "Puga";
$paginaAtual = "usuarios";

$usuarios = [
    ["id" => 1, "nome" => "Gustavo Puga", "email" => "gustavo@email.com", "cargo" => "Administrador", "status" => "Ativo"],
    ["id" => 2, "nome" => "João Amaral", "email" => "joao@email.com", "cargo" => "Boiola", "status" => "Ativo"],
    ["id" => 3, "nome" => "Kayky Bola", "email" => "maria@email.com", "cargo" => "Corno", "status" => "Inativo"],
    ["id" => 4, "nome" => "Guilherme Acala", "email" => "carlos@email.com", "cargo" => "Pau Mandado", "status" => "Ativo"]
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
    <?php include 'menu.php'; ?>

    <main class="content">
        <header class="page-header">
            <h1>Usuários</h1>
            <p>Lista de usuários cadastrados</p>
        </header>

        <section class="panel">
            <div class="panel-header">
                <div>
                    <h2>Gerenciamento de usuários</h2>
                    <p class="panel-subtitle">Controle, edição e visualização de usuários cadastrados</p>
                </div>
                <a href="cadastro.php" class="btn">Cadastrar usuário</a>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Cargo</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario): ?>
                            <tr>
                                <td><?php echo $usuario["id"]; ?></td>
                                <td><?php echo $usuario["nome"]; ?></td>
                                <td><?php echo $usuario["email"]; ?></td>
                                <td><?php echo $usuario["cargo"]; ?></td>
                                <td>
                                    <span class="status <?php echo strtolower($usuario["status"]); ?>">
                                        <?php echo $usuario["status"]; ?>
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

<?php include 'footer.php'; ?>
</body>
</html>
