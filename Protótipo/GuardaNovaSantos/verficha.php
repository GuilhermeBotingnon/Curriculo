<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gns - Ficha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleverficha.css"> 
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon"> 

    <script>
function confirmarExclusao(id_cooperado) {
    var confirmacao = confirm("Tem certeza que deseja excluir este cadastro?");
    if (confirmacao) {
        window.location.href = 'excluirficha.php?select=' + id_cooperado;
    }
}
</script>

    <?php
include_once("conexaocooperado.php");

// Verifica se o formulário foi enviado
if(isset($_GET['buscar'])) {
    // Verifica se foi selecionado um cooperado
    if(isset($_GET['select'])) {
        $id_ficha = $_GET['select'];

        // Busca as informações do cooperado no banco de dados
        $stmt = $conn->prepare("SELECT * FROM ficha WHERE id_ficha = :id_ficha");
        $stmt->bindParam(':id_ficha', $id_ficha, PDO::PARAM_INT);
        $stmt->execute();
        $ficha = $stmt->fetch(PDO::FETCH_ASSOC);

    }
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
    <div class="container justify-content-center align-content-center formulario col-5">
          <h2 class="texto">Nome :</h2>
          <input type="text mb-3 " class="form-control-lg caixa custom-margin" name ="matricula" id="exampleInputEmail1" placeholder="matrícula" value="<?php echo "{$ficha['nome']}";?>" readonly>
          <h2 class="texto">Ficha</h2>  
          <img class="pdfimagem" src="<?php echo "{$ficha['imagempdf']}"; ?>">
      </div>
      </form>
    </div>
    <div class="container-fluid d-flex justify-content-center align-items-center">
  
  
  <button type="submit" class="btn btn-primary botao col-5" onclick="window.location.href='editarficha.php?select=<?php echo $ficha ['id_ficha'];?>'">Editar</button>

  <button class="btn btn-primary botao col-5"  onclick="confirmarExclusao(<?php echo $ficha['id_ficha']; ?>)">Excluir</button>
  </div>
</div>
</div>
  </main>    
<footer>
</footer>
    </body>
</html>