<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gns - Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css\stylecadastros.css"> 
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <script src="js/script.js"></script>
 
    <style>
  .txtsucesso{
 color: yellow;
 font-size: 1em;
 font-weight: 450;
  }
</style>
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
  
  </head>
  <body>
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark gnsNavCor">
            
                <a href="consultar.html"
                class="text-decoration-none px-2 py-3 bg-white rounded-3"
                style="color:#022873; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; margin-left: 10em; "
                >Voltar</a>
                <div class="container-fluid d-flex justify-content-center align-items-center">
                <h1 class="text-white d-flex align-items-center justify-content-center" style="font-family: Poppins; font-size: 40px; margin-right: 7em;"> Cadastro</h1>
                </div>  
        </nav>
        </header>
   <main class="tudo">
   <div class="container-fluid d-flex justify-content-center align-items-center">
    <img src="favicon/Logo.svg" class="img-fluid logogns">
   </div>
   <form action="#" method="POST" class="tudotudo">
    <div class="container-fluid d-flex justify-content-center align-items-center">
          <div class="row align-items-center justify-content-center">
           <div class="col-md-6">   
            <h2 class="texto">Nº de Matrícula</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name ="matricula" id="exampleInputEmail1" placeholder="matrícula" required>
            <h2 class="texto ">Nome</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="nome" id="exampleInputEmail1" placeholder="Nome" required>
            <h2 class="texto ">Data de Nascimento</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="nascimento" id="exampleInputEmail1" placeholder="Data de Nascimento" required>
            <h2 class="texto">Nacionalidade</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="nacionalidade" id="exampleInputEmail1" placeholder="Nacionalidade" required>
            <h2 class="texto ">UF</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="uf" id="exampleInputEmail1" placeholder="UF" required>
            <h2 class="texto ">Estado Civil</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="estadocivil" id="exampleInputEmail1" placeholder="Estado Civil" required>
            <h2 class="texto ">CPF</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="cpf" id="exampleInputEmail1" placeholder="CPF" required>
            <h2 class="texto">RG</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="rg" id="exampleInputEmail1" placeholder="RG" required>
            <h2 class="texto ">Órgão Expedidor</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="orgao" id="exampleInputEmail1" placeholder="Órgão Expedidor" required>
            <h2 class="texto ">Formação Acadêmica</h2>
            <textarea class="form-control caixa1 custom-margin" name="formacao" placeholder="Formação Acadêmica"> </textarea>
           </div>
         
            <div class="col-md-6">
                 
            <h2 class="texto">CEP</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" onblur="pesquisacep(this.value);" size="10" maxlength="9"  name="cep" id="cep" placeholder="CEP" required>
            <h2 class="texto ">Número </h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="numero" id="numero" placeholder="Número">
            <h2 class="texto ">Bairro</h2> 
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="bairro"id="bairro" placeholder="Bairro">
            <h2 class="texto">Cidade</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="cidade" id="cidade" placeholder="Cidade">
            <h2 class="texto ">Complemento</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="complemento" id="exampleInputEmail1" placeholder="Complemento" required>
            <h2 class="texto ">Rua</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="rua" id="rua" placeholder="Rua" required>
            <h2 class="texto">Email</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="email" id="exampleInputEmail1" placeholder="Email" required>
            <h2 class="texto ">Telefone Celular</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="celular" id="exampleInputEmail1" placeholder="Telefone Celular" required>
            <h2 class="texto ">Profissão</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="profissao" id="exampleInputEmail1" placeholder="Profissão" required>
            <h2 class="texto ">Experiência Profissional</h2>
            <textarea class="form-control caixa2 custom-margin" name="experiencia" placeholder="Expêriencia Profissional"> </textarea>            
            </div>
        </div> 
      </div> 
      <div class="container-fluid d-flex justify-content-center align-items-center text-center">
      
          <button type="submit" class="btn btn-primary botao col-5">Enviar</button>
         </div>
  </form>
  <div class="container-fluid d-flex justify-content-center align-items-center">
  <p class="txtsucesso"> <?php echo $txt; ?></p>
  </div>
</main>    
<footer>
</footer>
    </body>
</html>