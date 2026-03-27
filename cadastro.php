<?php
$usuarioLogado = "Puga";
$paginaAtual = "usuarios";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="layout">
    <?php include 'menu.php'; ?>

    <main class="content">
        <header class="page-header">
            <h1>Cadastrar Usuário</h1>
            <p>Preencha os dados abaixo para cadastrar um novo usuário</p>
        </header>

        <section class="panel form-panel">
            <form action="insere-usuario.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite o nome do usuário" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Digite o email" required>
                </div>

                <div class="form-group">
                    <label for="cargo">Cargo</label>
                    <input type="text" id="cargo" name="cargo" placeholder="Digite o cargo" required>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" required>
                        <option value="">Selecione</option>
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>

                <div class="actions">
                    <a href="usuarios.php" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn">Salvar usuário</button>
                </div>
            </form>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
