<aside class="sidebar">
    <div class="sidebar-top">
        <div class="logo">Meu Painel</div>

        <nav class="menu">
            <a href="dashboard.php" class="menu-item <?php echo ($paginaAtual === 'dashboard') ? 'active' : ''; ?>">Dashboard</a>
            <a href="usuarios.php" class="menu-item <?php echo ($paginaAtual === 'usuarios') ? 'active' : ''; ?>">Usuários</a>
            <a href="postagens.php" class="menu-item <?php echo ($paginaAtual === 'postagens') ? 'active' : ''; ?>">Postagens</a>
            <a href="categorias.php" class="menu-item <?php echo ($paginaAtual === 'categorias') ? 'active' : ''; ?>">Categorias</a>
        </nav>
    </div>

    <div class="sidebar-bottom">
        <a href="cadastro.php" class="btn sidebar-btn">Cadastrar usuário</a>
        <a href="logout.php" class="btn sidebar-btn">Sair</a>

        <div class="user-box">
            <span>Logado como:</span>
            <strong><?php echo $usuarioLogado ?? 'Usuário'; ?></strong>
        </div>
    </div>
</aside>
