<?php
$usuarioLogado = "Puga";
$paginaAtual = "categorias";

$categorias = [
    ["id" => 1, "nome" => "Tecnologia", "descricao" => "Conteúdos sobre sistemas e inovação", "status" => "Ativo"],
    ["id" => 2, "nome" => "Notícias", "descricao" => "Novidades da plataforma", "status" => "Ativo"],
    ["id" => 3, "nome" => "Tutoriais", "descricao" => "Guias e passo a passo", "status" => "Inativo"]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="layout">
    <?php include 'componentes/menu.php'; ?>

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
                <a href="#" class="btn">Nova categoria</a>
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
                        <?php foreach ($categorias as $categoria): ?>
                            <tr>
                                <td><?php echo $categoria["id"]; ?></td>
                                <td><?php echo $categoria["nome"]; ?></td>
                                <td><?php echo $categoria["descricao"]; ?></td>
                                <td>
                                    <span class="status <?php echo strtolower($categoria["status"]); ?>">
                                        <?php echo $categoria["status"]; ?>
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
