<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gns - Ficha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleficha.css"> 
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon"> 
<style>
 .sucesso,
 .falha{
    color:yellow; /* Cor vermelha do Bootstrap */
    font-size: 2em;
    font-weight: 550;
 }
 </style>
<?php
$txt ='';

if(!empty($_POST))
{ $nomeficha = ($_POST["nome"]);
  $imagem = $_FILES['imagemFicha'];
  $dir = "imagemFicha/"; // diretorio para as imagens

  date_default_timezone_set('America/Sao_Paulo');

  $extensao = strtolower(substr($imagem['name'],-4)); //Pegando extensão do arquivo 
  
  $novo_nome = date("Y.m.d-H.i.s") . $extensao; //Definindo um novo nome para o arquivo 

  move_uploaded_file($imagem['tmp_name'], $dir.$novo_nome); //Fazer upload do arquivo 

  $caminhoIMG = $dir.$novo_nome;
 
  include_once("conexaocooperado.php");

  try{

    $stmt = $conn->prepare("INSERT INTO ficha (nome,imagempdf) VALUES (:nome,:imagempdf)");

    $stmt-> bindParam(':nome', $nomeficha);
    $stmt-> bindParam(':imagempdf', $caminhoIMG);

    $stmt->execute();

    echo $txt = "Ficha Enviada com sucesso ";
  } catch(PDOException $e){
    echo $txterro = "Erro ao enviar a ficha". $e->getMessage();
  }
$conn = null;

}

?>

  </head>
  <body>
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark gnsNavCor">
            <div class="d-flex flex-column flex-lg-row justify-content-start align-items-start">
                <a href="consultar.html"
                class="text-decoration-none px-2 py-3 bg-white rounded-3"
                style="color:#022873; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; margin-left: 10em; "
                >Voltar</a>
                <h1 class="text-white d-flex align-items-center justify-content-center" style="margin-left: 7em; font-family: Poppins; font-size: 40px;"> Cadastro</h1>
        </nav>
        </header>
   <main class="tudo">
   
    <div class="container d-flex justify-content-center align-content-center";>
       <img src="favicon/Logo.svg" class="img-fluid logogns col-5" >
    </div>
    <form action="#" enctype="multipart/form-data" accept="images/*" method="POST" name="form" onsubmit=returnValidarFormulario()>
    <div class="container justify-content-center align-content-center formulario col-5">
          <h2 class="texto">Nome :</h2>
          <input type="text" name="nome"  class="form-control-lg caixanome" id="exampleInputEmail1" placeholder="Nome" required>
          <h2 class="texto">Enviar Arquivo</h2>  
          <label for="formFile" class="form-label label">
          <input type="file" name="imagemFicha" class="form-control-lg caixapdf" id="exampleInputPassword1" placeholder="Clique para enviar o PDF" required >
        </label>
       <p> <button type="submit" class="btn btn-primary botao col-9" >Enviar</button></p>
       <?php echo "<div class = 'sucesso'> $txt </div" ?>
      </div>
      </form>
    </div>
 
   
  </main>    
<footer>
</footer>
    </body>
</html>

