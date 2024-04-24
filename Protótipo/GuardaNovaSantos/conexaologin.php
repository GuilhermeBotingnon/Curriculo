<?php

$usuario = 'root';
$senha ='usbw';
$database ='login';
$host = 'localhost:3307';

$mysqli = new mysqli($host,$usuario,$senha,$database);

if($mysqli->error){
    die("Erro a se Conectar :" . $mysqli->error);
}
?>