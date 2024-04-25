<?php
$txt ='';


if(!empty($_POST))
{ $cooperado = array($_POST['nome'],
$_POST['nascimento'],
$_POST['uf'], 
$_POST['estadocivil'],
$_POST['cep'],
$_POST['numero'],
$_POST['bairro'], 
$_POST['cidade'],
$_POST['complemento'],
$_POST['rua'],
$_POST['email'], 
$_POST['celular'],
$_POST['experiencia']
  );
 
  include_once('conexao.php');

  try{

    $stmt = $conn->prepare("INSERT INTO infocooperados (nome,nascimento,uf,estadocivil,cpf,cep,numero,bairro,cidade,complemento,rua,email,celular,experiencia)  VALUES (:nome,:nascimento,:nacionalidade,:uf,:estadocivil,:cep,:numero,:bairro,:cidade,:complemento,:rua,:email,:celular,:experiencia)");

    $stmt-> bindParam(':nome', $cooperado[0]);
    $stmt-> bindParam(':nascimento', $cooperado[1]);
    $stmt-> bindParam(':uf', $cooperado[2]);
    $stmt-> bindParam(':estadocivil', $cooperado[3]);
    $stmt-> bindParam(':cep',$cooperado[4]);
    $stmt-> bindParam(':numero', $cooperado[5]);
    $stmt-> bindParam(':bairro', $cooperado[6]);
    $stmt-> bindParam(':cidade', $cooperado[7]);
    $stmt-> bindParam(':complemento', $cooperado[8]);
    $stmt-> bindParam(':rua', $cooperado[9]);
    $stmt-> bindParam(':email', $cooperado[10]);
    $stmt-> bindParam(':celular', $cooperado[11]);
    $stmt-> bindParam(':experiencia', $cooperado[12]);

    $stmt->execute();

    echo $txt = "Cadastro Realizado com sucesso ";
  } catch(PDOException $e){
    echo $txterro = "Erro ao fazer o cadastro". $e->getMessage();
  }
$conn = null;
}
?>
<!doctype html>
<html lang="pt_br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GNS - Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <!-- texto aviso -->
    <style>
      .txtsucesso{
     color: yellow;
     font-size: 1em;
     font-weight: 450;
      }
    </style>
    <!-- Nav Bar -->
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
  <!-- Começo Formulario -->
    <section class="Main d-flex justify-content-center">
    <form action="#" method="post">
        <div class="container Formulario">
            <div class="row">
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Nome</label>
                <input type="text" class="form-control py-3 fs-4" name="nome" id="" placeholder="Nome" required>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Data de nascimento</label>
                <input type="date" class="form-control py-3 fs-4" name="nascimento" id="" placeholder="Texto Exemplo" required>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Celular</label>
                <input type="tel" class="form-control py-3 fs-4" maxlength="15" onkeyup="handlePhone(event)"  name="celular" id="" placeholder="Texto Exemplo" required>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Email</label>
                <input type="text" class="form-control py-3 fs-4" name="email" id="" placeholder="Texto Exemplo" required>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">UF</label>
                <input type="text" class="form-control py-3 fs-4" name="uf" id="" placeholder="Texto Exemplo" required>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Estado civil</label>
                <select class="form-select py-3 fs-4" name="estadocivil" id="floatingSelectGrid">
                  <option selected>Solteiro</option>
                  <option value="2">Casado</option>
                  <option value="3">Outro</option>
                </select>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">CEP</label>
                <input type="text" class="form-control py-3 fs-4" onblur="pesquisacep(this.value);" onkeyup="handleZipCode(event)"  maxlength="9"  name="cep" id="cep" placeholder="CEP" required>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Cidade</label>
                <input type="text" class="form-control py-3 fs-4" name="cidade" id="cidade" placeholder="Texto Exemplo" required>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Bairro</label>
                <input type="text" class="form-control py-3 fs-4" name="bairro" id="bairro" placeholder="Texto Exemplo" required>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Rua</label>
                <input type="text" class="form-control py-3 fs-4" name="rua" id="rua" placeholder="Texto Exemplo" required>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Número</label>
                <input type="number" class="form-control py-3 fs-4" name="numero" id="numero" placeholder="Texto Exemplo" required>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Complemento</label>
                <input type="text" class="form-control py-3 fs-4" name="complemento" id="" placeholder="Texto Exemplo" required>
              </div>
              <div class="col-md-12 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Experiencia Profissional</label>
                <textarea class="form-control caixa2 custom-margin" name="experiencia" placeholder="Expêriencia Profissional"> </textarea>
              </div>
              <div class="my-3 d-flex justify-content-center">
              <button type="submit" name="enviar" class="btn text-decoration-none px-4 py-2 bg-white rounded-3 fs-4 fw-bold">Cadastrar</button>
              <div>
            </div>
          </div>
          </form>
          <div class="container-fluid d-flex justify-content-center align-items-center">
            <p class="txtsucesso"> <?php echo $txt; ?></p>
          </div>
    </section>
    <!-- Scripts adicionais / Mascaras -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/buscaCEP.js"></script>
    <script src="js/mascaraCEP.js"></script>
    <script src="js/mascaraTelefone.js"></script>
  </body>
</html>