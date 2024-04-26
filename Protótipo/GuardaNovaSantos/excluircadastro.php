<?php

$cod = $_GET['select'];


include_once('conexao.php');
	try 
	{
		   
		$delete = $conn->prepare("DELETE FROM infocooperados WHERE id_cooperado=$cod");
		$delete->execute();
		header( "refresh:0;url=arquivoscadastro.php" );
    echo "<script>alert('Cadastro excluido com sucesso');</script>";
	} 
	catch(PDOException $e) 
	{
		echo 'ERROR: ' . $e->getMessage();
	}
	
 ?>
<button onclick="window.location.href='consultaCliente.php'">Voltar</button>