<?php
//dados conexão bd local
$servidor = 'localhost';
$banco = 'projeto';
$usuario = 'root';
$senha = '';

try{
    $pdo = new PDO ("mysql:dbname=$banco;host=$servidor;charset=utf8","$usuario","$senha");
   } catch(Exception $e) {
        echo 'Erro ao conectar ao banco de dados!';
}


?>