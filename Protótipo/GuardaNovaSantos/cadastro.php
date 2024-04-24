<?php
$txt ='';


if(!empty($_POST))
{ $cooperado = array($_POST['matricula'],
$_POST['nome'],
$_POST['nascimento'],
$_POST['nacionalidade'],
$_POST['uf'], 
$_POST['estadocivil'],
$_POST['cpf'],
$_POST['rg'],
$_POST['orgao'],
$_POST['formacao'],
$_POST['cep'],
$_POST['numero'],
$_POST['bairro'], 
$_POST['cidade'],
$_POST['complemento'],
$_POST['rua'],
$_POST['email'], 
$_POST['celular'],
$_POST['profissao'],
$_POST['experiencia']
  );
 
  include_once("conexao.php");

  try{

    $stmt = $conn->prepare("INSERT INTO infocooperados (matricula,nome,nascimento,nacionalidade,uf,estadocivil,cpf,rg,orgao,formacao,cep,numero,bairro,cidade,complemento,rua,email,celular,profissao,experiencia)  VALUES (:matricula,:nome,:nascimento,:nacionalidade,:uf,:estadocivil,:cpf,:rg,:orgao,:formacao,:cep,:numero,:bairro,:cidade,:complemento,:rua,:email,:celular,:profissao,:experiencia)");

    $stmt-> bindParam(':matricula', $cooperado[0]);
    $stmt-> bindParam(':nome', $cooperado[1]);
    $stmt-> bindParam(':nascimento', $cooperado[2]);
    $stmt-> bindParam(':nacionalidade', $cooperado[3]);
    $stmt-> bindParam(':uf', $cooperado[4]);
    $stmt-> bindParam(':estadocivil', $cooperado[5]);
    $stmt-> bindParam(':cpf', $cooperado[6]);
    $stmt-> bindParam(':rg', $cooperado[7]);
    $stmt-> bindParam(':orgao', $cooperado[8]);
    $stmt-> bindParam(':formacao', $cooperado[9]);
    $stmt-> bindParam('cep',$cooperado[10]);
    $stmt-> bindParam(':numero', $cooperado[11]);
    $stmt-> bindParam(':bairro', $cooperado[12]);
    $stmt-> bindParam(':cidade', $cooperado[13]);
    $stmt-> bindParam(':complemento', $cooperado[14]);
    $stmt-> bindParam(':rua', $cooperado[15]);
    $stmt-> bindParam(':email', $cooperado[16]);
    $stmt-> bindParam(':celular', $cooperado[17]);
    $stmt-> bindParam(':profissao', $cooperado[18]);
    $stmt-> bindParam(':experiencia', $cooperado[19]);

    $stmt->execute();

    echo $txt = "Cadastro Realizado com sucesso ";
  } catch(PDOException $e){
    echo $txterro = "Erro ao fazer o cadastro". $e->getMessage();
  }
$conn = null;

}

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gns - Cadastro </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous" async></script>
    <link rel="stylesheet" href="/css/cadastro.css">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon/favicon.ico" type="image/x-icon">
    <script src="js/script.js"></script>
</head>
<!-- class=" navbar-brand text-decoration-none px-2 py-3 bg-white rounded-3"
           style="color:#022873; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; margin-left: 10em; " -->
<body>
  <style>
    .txtsucesso{
   color: yellow;
   font-size: 1em;
   font-weight: 450;
    }
  </style>

  <nav class="navbar fixed-top gnsCor">
      <div class="container">
        <a class="navbar-brand" href="consulta.php">
          <button 
          class="btn text-decoration-none px-3 py-3 bg-white rounded-3 fs-4 fw-bold"
          style="color: #022873; font-family: Poppins;"
          > Voltar </button>
        </a>
      </div>
  </nav>

<main class="cor" style="font-family: Poppins;">
  <form method="post">
  <div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="row fs-1">
      <div class="col-md-6 col-sm-3 my-3">
        <label for="matricula" class="form-label caixa fs-2">Nº de Matrícula</label>
        <input type="text" class="form-control py-3 fs-4" name ="matricula" placeholder="Texto Exemplo" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">Nome</label>
        <input type="text" class="form-control py-3 fs-4" name="nome" id="" placeholder="Nome" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">nascimento</label>
        <input type="date" class="form-control py-3 fs-4" name="nascimento" id="" placeholder="Texto Exemplo" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">nacionalidade</label>
        <input type="text" class="form-control py-3 fs-4" name="nacionalidade" id="" placeholder="Texto Exemplo" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">UF</label>
        <input type="text" class="form-control py-3 fs-4" name="uf" id="" placeholder="Texto Exemplo" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">estadocivil</label>
        <select class="form-select py-3 fs-4" name="estadocivil" id="floatingSelectGrid">
          <option selected>EstadoCivil</option>
          <option value="1">Solteiro</option>
          <option value="2">Casado</option>
          <option value="3">Outro</option>
        </select>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">cpf</label>
        <input type="number" class="form-control py-3 fs-4" name="cpf" id="" placeholder="Texto Exemplo" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">rg</label>
        <input type="number" class="form-control py-3 fs-4" name="rg" id="" placeholder="Texto Exemplo" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">Orgão Emissor</label>
        <input type="text" class="form-control py-3 fs-4" name="orgao" id="" placeholder="Texto Exemplo" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">CEP</label>
        <input type="text" class="form-control py-3 fs-4" onblur="pesquisacep(this.value);" size="10" maxlength="9"  name="cep" id="cep" placeholder="CEP" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">Numero</label>
        <input type="number" class="form-control py-3 fs-4" name="numero" id="" placeholder="Texto Exemplo" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">Bairro</label>
        <input type="text" class="form-control py-3 fs-4" name="bairro" id="" placeholder="Texto Exemplo" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">Cidade</label>
        <input type="text" class="form-control py-3 fs-4" name="cidade" id="" placeholder="Texto Exemplo" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">Complemento</label>
        <input type="text" class="form-control py-3 fs-4" name="complemento" id="" placeholder="Texto Exemplo" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">Rua</label>
        <input type="text" class="form-control py-3 fs-4" name="rua" id="" placeholder="Texto Exemplo" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">Email</label>
        <input type="text" class="form-control py-3 fs-4" name="email" id="" placeholder="Texto Exemplo" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">Celular</label>
        <input type="text" class="form-control py-3 fs-4" name="celular" id="" placeholder="Texto Exemplo" required>
      </div>
      <div class="col-md-6 col-sm-3 my-3">
        <label for="username" class="form-label caixa fs-2">experiencia Profissional</label>
        <textarea class="form-control caixa2 custom-margin" name="experiencia" placeholder="Expêriencia Profissional"> </textarea>
      </div>
    </div>
    <button type="submit" name="enviar" class="btn text-decoration-none px-4 py-2 bg-white rounded-3 fs-4 fw-bold">Enviar</button>
    <div class="container-fluid d-flex justify-content-center align-items-center">
      <p class="txtsucesso"> <?php echo $txt; ?></p>
      </div>
  </div>
</form>
</main>
</body>
</html>