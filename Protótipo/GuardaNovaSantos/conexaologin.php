<?php

$usuario ='root';
$senha ='AkKZrzFWqfCSJfAdkZjCBuRwEBBKmBIF';
$database ='railway';
$host ='roundhouse.proxy.rlwy.net:31956';

$mysqli = new mysqli($host, $usuario , $senha , $database);

if ($mysqli ->error){
    die("Erro ao Conectar com o DB :" . $mysqli ->error);
} 
?>