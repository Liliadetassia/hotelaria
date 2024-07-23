<?php 

//definir fuso horario
date_default_timezone_set('America/Sao_Paulo');

require_once("conexao.php");
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = $pdo->query("SELECT * from usuarios");

?>