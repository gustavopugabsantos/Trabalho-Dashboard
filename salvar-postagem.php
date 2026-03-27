<?php
session_start();

$titulo = $_POST['titulo'] ?? '';
$conteudo = $_POST['conteudo'] ?? '';

if (!isset($_SESSION['postagens'])) {
    $_SESSION['postagens'] = [];
}

$id = count($_SESSION['postagens']) + 1;

$_SESSION['postagens'][] = [
    'id' => $id,
    'titulo' => $titulo,
    'conteudo' => $conteudo
];

header("Location: postagens.php");
exit;
