<?php

$usuario = 'root';
$senha ='AkKZrzFWqfCSJfAdkZjCBuRwEBBKmBIF';
$database ='railway';
$host = 'roundhouse.proxy.rlwy.net:31956';

$mysqli = new mysqli($host, $usuario , $senha , $database);

try{
    $conn = new PDO("mysql:host=$host;dbname=railway",$usuario,$senha);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
}

if ($mysqli ->error){
    die("Erro ao Conectar com o DB :" . $mysqli ->error);
} 
?>