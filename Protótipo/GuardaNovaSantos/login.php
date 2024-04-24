<?php

// Iniciar sessão
session_start();

// conexao banco
include("conexao.php")

// Verificar se o formulário de login foi enviado
if (isset($_POST['email']) && isset($_POST['senha'])) {

  // Receber dados do formulário
  $login = mysqli_real_escape_string($conn, $_POST['email']);
  $senha = mysqli_real_escape_string($conn, $_POST['senha']);

  // Consultar o banco de dados para verificar as credenciais do usuário
  $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = MD5('$senha')";
  $result = mysqli_query($conn, $sql);

  // Verificar se o usuário foi encontrado
  if (mysqli_num_rows($result) > 0) {
    // Armazenar informações do usuário na sessão
    $usuario = mysqli_fetch_assoc($result);
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_nome'] = $usuario['email'];
    $_SESSION['usuario_login'] = $usuario['senha'];

    // Redirecionar para a página inicial
    header("Location: index.php");
    exit();
  } else {
    // Erro de login
    $erro_login = "Login ou senha inválidos.";
  }
}
?>

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
</head>
<body>
<?php if (isset($erro_login)): ?>
    <p style="color: red;"><?php echo $erro_login; ?></p>
  <?php endif; ?>
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
        <form method="post">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" id="email" class="form-control caixa py-3" placeholder="Exemplo@exemplo.com" required>
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control caixa py-3" placeholder="Digite sua senha" required>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label caixa" for="remember">Lembrar da senha</label>
          </div>
          <button type="submit" class="btn text-decoration-none px-4 py-2 bg-white rounded-3 fs-4 fw-bold">Entrar</button>
        </form>
      </div>
    </div>
  </div>
</main>
</body>
</html>