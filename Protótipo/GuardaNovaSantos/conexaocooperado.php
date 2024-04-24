<?php

$usuario = 'root';
$senha ='usbw';
$database ='cooperado';
$host = 'localhost:3307';

try{
    $conn = new PDO("mysql:host=$host;dbname=cooperado",$usuario,$senha);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
}
    ?>