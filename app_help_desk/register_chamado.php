<?php

session_start();

$titulo = str_replace('#', '-', $_GET['titulo']);
$categoria= str_replace('#', '-', $_GET['categoria']);
$descricao= str_replace('#', '-', $_GET['descricao']);

$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' .$descricao . PHP_EOL;

$arquivo = fopen('../../../app_help_desk/arquivo.hd', 'a');

fwrite($arquivo, $texto);

fclose($arquivo);

header('location: consultar_chamado.php');

?>