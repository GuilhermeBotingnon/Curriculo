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
                
                header('location: consultar.php');
                 
           } else {
            echo $error_login = "Email ou Senha incorreto";
           }
            }
     }
     ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gns - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous" async></script>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="shortcut icon" href="/favicon/favicon.ico" type="image/x-icon">
    <style>
.error {
    color:yellow;
    font-size: 1em;
    font-weight: 500;
}
</style>
</head>
<body>
  <nav class="navbar fixed-top gnsCor">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <button 
          class="btn text-decoration-none px-2 py-3 bg-white rounded-3 fs-4 fw-bold"
          style="color: #022873; font-family: Poppins;"
          > Pagina Inicial </button>
        </a>
      </div>
  </nav>
<main class="cor text-white fw-bold fs-2" style="font-family: Poppins;">
  <div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="row">
      <div class="col-md-7">
        <img src="favicon/Logo.svg" alt="Logo GNS" class="img-fluid logo">
      </div>
      <div class="col-md-5">
        <form action="" method="post">
          <div class="mb-3">
            <label for="username" class="form-label">Nome de usuário</label>
            <input type="text" name="email" class="form-control caixa py-3" placeholder="Exemplo@exemplo.com" required>
            <?php if (!empty($error_email)) : ?>
    <div class="error"><?php echo $error_email; ?></div>
<?php endif; ?>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control caixa py-3" placeholder="Digite sua senha" required>
            <?php if (!empty($error_senha)) : ?>
    <div class="error"><?php echo $error_senha; ?></div>
<?php endif; ?>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label caixa" for="remember">Lembrar da senha</label>
            <?php if (!empty($error_login)) : ?>
    <div class="error"><?php echo $error_login; ?></div>
<?php endif; ?>
          </div>
          <button type="submit" class="btn text-decoration-none px-4 py-2 bg-white rounded-3 fs-4 fw-bold">Entrar</button>
        </form>
      </div>
    </div>
  </div>
</main>
</body>
</html>