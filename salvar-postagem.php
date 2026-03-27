<?php
session_start();

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];

/* cria array se não existir */
if (!isset($_SESSION['postagens'])) {
    $_SESSION['postagens'] = [];
}

/* gera ID */
$id = count($_SESSION['postagens']) + 1;

/* salva */
$_SESSION['postagens'][] = [
    'id' => $id,
    'titulo' => $titulo,
    'conteudo' => $conteudo
];

/* volta pra lista */
header("Location: postagens.php");
exit;