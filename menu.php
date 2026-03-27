<aside class="sidebar">
    <div class="sidebar-top">
        <div class="logo">Meu Painel</div>

        <nav class="menu">
            <a href="dashboard.php" class="menu-item <?php echo ($paginaAtual === 'dashboard') ? 'active' : ''; ?>">Dashboard</a>
            <a href="usuarios.php" class="menu-item <?php echo ($paginaAtual === 'usuarios') ? 'active' : ''; ?>">Usuários</a>
            <a href="postagens.php" class="menu-item <?php echo ($paginaAtual === 'postagens') ? 'active' : ''; ?>">Postagens</a>
            <a href="categorias.php" class="menu-item <?php echo ($paginaAtual === 'categorias') ? 'active' : ''; ?>">Categorias</a>
            <a href="#" class="menu-item">Relatórios</a>
            <a href="#" class="menu-item">Configurações</a>
        </nav>
    </div>

    <div class="user-box">
        <span>Logado como:</span>
        <strong><?php echo $usuarioLogado; ?></strong>
    </div>
</aside>
