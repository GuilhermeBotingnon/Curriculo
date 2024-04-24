<?php
include_once('conexaocooperado.php');

$id_ficha = $_POST['id_ficha'];
$nome = $_POST['nome'];
if (!empty($_FILES['imagemFicha']['name'])) {
  $imagem = $_FILES['imagemFicha'];
  $dir = "imagemFicha/"; // diretorio para as imagens

  date_default_timezone_set('America/Sao_Paulo');

  $extensao = strtolower(substr($imagem['name'], -4)); // Pegando extensão do arquivo 

  $novo_nome = date("Y.m.d-H.i.s") . $extensao; // Definindo um novo nome para o arquivo 

  move_uploaded_file($imagem['tmp_name'], $dir . $novo_nome); // Fazer upload do arquivo 

  $caminhoIMG = $dir . $novo_nome;
} else {
  // Se nenhum novo arquivo foi enviado, mantenha o valor existente no banco de dados
  $caminhoIMG = $_POST['imagem_antiga']; // Adicione um campo hidden no seu formulário com o valor atual
}


try {
    $stmt = $conn->prepare("UPDATE ficha SET nome = :nome , 
    imagempdf = :imagempdf WHERE id_ficha = :id_ficha");

  $stmt->execute(array(
    ':nome' => $nome,
    ':imagempdf' =>$caminhoIMG,
    ':id_ficha' => $id_ficha, 
  ));
  header( "refresh:0;url=arquivosficha.php" );
  echo "<script>alert('Ficha editada com sucesso');</script>";
}
 catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
 }
?>

