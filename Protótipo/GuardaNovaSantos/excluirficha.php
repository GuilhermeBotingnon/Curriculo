<?php

$cod = $_GET['select'];


include_once('conexaocooperado.php');
	try 
	{
		   
		$delete = $conn->prepare("DELETE FROM ficha WHERE id_ficha=$cod");
		$delete->execute();
		header( "refresh:0;url=arquivosficha.php" );
    echo "<script>alert('ficha excluida com sucesso');</script>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>
<button onclick="window.location.href='consultaCliente.php'">Voltar</button>