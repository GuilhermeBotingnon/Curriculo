<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gns - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylelogin.css">  
    <link rel="shortcut icon" href="/favicon/favicon.ico" type="image/x-icon">
    <style>
.error {
    color:yellow; /* Cor vermelha do Bootstrap */
    font-size: 2em;
    font-weight: 500;
}
</style>
    <?php

include("conexaologin.php");

if ($_POST){

     if (strlen($_POST['email'])== 0) {
      echo $error_email = "preencha seu email";
      } else if (strlen($_POST["senha"])== 0){
          echo $error_senha = "Preencha sua senha";
        } else {
            $email = $mysqli-> real_escape_string($_POST["email"]);
            $senha = $mysqli->real_escape_string($_POST["senha"]);
            
            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo sql; " . $mysqli->error); 
             
           $quantidade = $sql_query->num_rows;
           
           if($quantidade == 1){
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                  session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['email'] = $usuario ['email'];
                
                header("Location: consultar.html");
                 
           } else {
            echo $error_login = "Email ou senha errado patrão";
           }
            }
     }
     ?>
  </head>
  <body>
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark gnsNavCor">
            <div class="d-flex flex-column flex-lg-row justify-content-start align-items-start">
                <a href="index.php"
                class="text-decoration-none px-2 py-3 bg-white rounded-3"
                style="color:#022873; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; margin-left: 10em; "
                >Página Inicial</a>
        </nav>
        </header>
   <main class="tudo mt-4">
   <div class="row-text-center py-2">
    <div class="container vh-100 d-flex justify-content-center align-content-center formulario ";>
     <div class="col-md-6">
      <div class="col-md-6"> 
       <img src="favicon/Logo.svg" class="img-fluid logogns">
      </div>
      </div>  
      <form action="" method="POST">
        <div class="mb-3">
          <input type="text" name="email" class="form-control-lg caixaemail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
          <?php if (!empty($error_email)) : ?>
    <div class="error"><?php echo $error_email; ?></div>
<?php endif; ?>

        </div>
        <div class="mb-3">
          <input type="password" name="senha" class="form-control-lg caixasenha" id="exampleInputPassword1" placeholder="Senha"> 
          <?php if (!empty($error_senha)) : ?>
    <div class="error"><?php echo $error_senha; ?></div>
<?php endif; ?>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input caixacheck" id="exampleCheck1">
          <label class="form-check-label caixachecktxt" for="exampleCheck1">Lembrar a Senha</label>
          <?php if (!empty($error_login)) : ?>
    <div class="error"><?php echo $error_login; ?></div>
<?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary botao" >Login</button>  
      </div>
      </form>
    </div>
  </main>    
<footer>
</footer>
    </body>
</html>

