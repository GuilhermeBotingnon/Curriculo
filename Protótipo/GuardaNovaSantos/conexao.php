<?php

$usuario = 'root';
$senha ='usbw';
$database ='login';
$host = 'localhost:3307';

$mysqli = new mysqli($host, $usuario , $senha , $database);

if ($mysqli ->error){
    die("Erro ao Conectar com o DB :" . $mysqli ->error);
} 