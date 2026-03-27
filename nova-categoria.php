<?php
$usuarioLogado = "Puga";
$paginaAtual = "categorias";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nova Categoria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="layout">
    <?php include 'menu.php'; ?>

    <main class="content">
        <header class="page-header">
            <h1>Nova Categoria</h1>
            <p>Cadastre uma nova categoria</p>
        </header>

        <section class="panel form-panel">
            <form action="categorias.php" method="POST">

                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nome" required>
                </div>

                <div class="form-group">
                    <label>Descrição</label>
                    <textarea name="descricao" required></textarea>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status">
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>

                <div class="actions">
                    <a href="categorias.php" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn">Salvar</button>
                </div>

            </form>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>
</body>
</html>