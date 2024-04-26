<?php

$usuario = 'root';
$senha ='eyVhlMSOpxzgVTTlAuCjvEqHOJIPfWMd';
$database ='railway';
$host = 'roundhouse.proxy.rlwy.net:35564';

$mysqli = new mysqli($host, $usuario , $senha , $database);

if ($mysqli ->error){
    die("Erro ao Conectar com o DB :" . $mysqli ->error);
} 

try{
    $conn = new PDO("mysql:host=$host;dbname=railway",$usuario,$senha);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
}


?>