<?php
session_start();

if (isset($_SESSION['logado'])) {
    header("Location: dashboard.php");
    exit;
}

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario == "admin" && $senha == "123") {
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = $usuario;

        header("Location: dashboard.php");
        exit;
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>

<div class="login-container">
    <div class="login-card">
        
        <h2>Login do Sistema</h2>

        <?php if ($erro): ?>
            <div class="erro"><?php echo $erro; ?></div>
        <?php endif; ?>

        <form method="POST">
            <input type="text" name="usuario" placeholder="Usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>

    </div>
</div>

</body>
</html>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(135deg, #1a0033, #4b0082);
    height: 100vh;
}

/* CENTRALIZA TUDO */
.login-container {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* CARD */
.login-card {
    background: #1e1e2f;
    padding: 40px;
    border-radius: 15px;
    width: 320px;
    box-shadow: 0 0 25px rgba(138, 43, 226, 0.5);
    text-align: center;
}

/* TÍTULO */
.login-card h2 {
    color: #c084fc;
    margin-bottom: 20px;
}

/* INPUTS */
.login-card input {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: none;
    border-radius: 8px;
    background: #2a2a40;
    color: #fff;
    outline: none;
    transition: 0.3s;
}

.login-card input:focus {
    background: #333355;
}

/* BOTÃO */
.login-card button {
    width: 100%;
    padding: 12px;
    background: linear-gradient(90deg, #7b2ff7, #a64dff);
    border: none;
    border-radius: 8px;
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.login-card button:hover {
    transform: scale(1.05);
    box-shadow: 0 0 10px #a64dff;
}

/* ERRO */
.erro {
    background: #ff4d4d;
    color: white;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 15px;
}
</style>