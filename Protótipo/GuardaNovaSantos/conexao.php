<?php

$usuario = 'root';
$senha ='CvXXTsYZOcSGYnDkjCVhexmwgzhIbWyB';
$database ='railway';
$host = 'viaduct.proxy.rlwy.net:21234';

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