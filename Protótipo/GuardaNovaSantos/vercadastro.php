<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gns - Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css\stylecadastros.css"> 
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon"> 

    <script>
function confirmarExclusao(id_cooperado) {
    var confirmacao = confirm("Tem certeza que deseja excluir este cadastro?");
    if (confirmacao) {
        window.location.href = 'excluircadastro.php?select=' + id_cooperado;
    }
}
</script>

    <?php
include_once("conexaocooperado.php");

// Verifica se o formulário foi enviado
if(isset($_GET['buscar'])) {
    // Verifica se foi selecionado um cooperado
    if(isset($_GET['select'])) {
        $id_cooperado = $_GET['select'];

        // Busca as informações do cooperado no banco de dados
        $stmt = $conn->prepare("SELECT * FROM infocooperados WHERE id_cooperado = :id_cooperado");
        $stmt->bindParam(':id_cooperado', $id_cooperado, PDO::PARAM_INT);
        $stmt->execute();
        $cooperado = $stmt->fetch(PDO::FETCH_ASSOC);

    }
}
?>

  </head>
  <body>
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark gnsNavCor">
            
                <a href="arquivoscadastro.php"
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
    <div class="container-fluid d-flex justify-content-center align-items-center">
          <div class="row align-items-center justify-content-center">
           <div class="col-md-6">   
            <h2 class="texto">Nº de Matrícula</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name ="matricula" id="exampleInputEmail1" placeholder="matrícula" value="<?php echo "{$cooperado['matricula']}";?>" readonly>
            <h2 class="texto ">Nome</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="nome" id="exampleInputEmail1" placeholder="Nome" value="<?php echo "{$cooperado['nome']}";?>" readonly>
            <h2 class="texto ">Data de Nascimento</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="nascimento" id="exampleInputEmail1" placeholder="Data de Nascimento" value="<?php echo "{$cooperado['nascimento']}";?>" readonly>
            <h2 class="texto">Nacionalidade</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="nacionalidade" id="exampleInputEmail1" placeholder="Nacionalidade" value="<?php echo "{$cooperado['nacionalidade']}";?>" readonly>
            <h2 class="texto ">UF</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="uf" id="exampleInputEmail1" placeholder="UF" value="<?php echo "{$cooperado['uf']}";?>" readonly>
            <h2 class="texto ">Estado Civil</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="estadocivil" id="exampleInputEmail1" placeholder="Estado Civil" value="<?php echo "{$cooperado['estadocivil']}";?>" readonly>
            <h2 class="texto ">CPF</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="cpf" id="exampleInputEmail1" placeholder="CPF" value="<?php echo "{$cooperado['cpf']}";?>" readonly>
            <h2 class="texto">RG</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="rg" id="exampleInputEmail1" placeholder="RG" value="<?php echo "{$cooperado['rg']}";?>" readonly>
            <h2 class="texto ">Órgão Expedidor</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="orgao" id="exampleInputEmail1" placeholder="Órgão Expedidor" value="<?php echo "{$cooperado['orgao']}";?>" readonly>
            <h2 class="texto ">Formação Acadêmica</h2>
            <textarea class="form-control caixa1 custom-margin" name="formacao" placeholder="Formação Acadêmica" readonly><?php echo "{$cooperado['formacao']}";?></textarea>
            
          </div>
         
            <div class="col-md-6">
                 
            <h2 class="texto">CEP</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="cep" id="exampleInputEmail1" placeholder="CEP" value="<?php echo "{$cooperado['cep']}";?>" readonly>
            <h2 class="texto ">Número </h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="numero" id="exampleInputEmail1" placeholder="Número" value="<?php echo "{$cooperado['numero']}";?>"readonly>
            <h2 class="texto ">Bairro</h2> 
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="bairro" id="exampleInputEmail1" placeholder="Bairro" value="<?php echo "{$cooperado['bairro']}";?>" readonly>
            <h2 class="texto">Cidade</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="cidade" id="exampleInputEmail1" placeholder="Cidade" value="<?php echo "{$cooperado['cidade']}";?>" readonly>
            <h2 class="texto ">Complemento</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="complemento" id="exampleInputEmail1" placeholder="Complemento" value="<?php echo "{$cooperado['complemento']}";?>" readonly>
            <h2 class="texto ">Telefone Fixo</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="telefonefixo" id="exampleInputEmail1" placeholder="Rua" value="<?php echo "{$cooperado['rua']}";?>" readonly>
            <h2 class="texto">Email</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="email" id="exampleInputEmail1" placeholder="Email" value="<?php echo "{$cooperado['email']}";?>" readonly>
            <h2 class="texto ">Telefone Celular</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="celular" id="exampleInputEmail1" placeholder="Telefone Celular" value="<?php echo "{$cooperado['celular']}";?>" readonly>
            <h2 class="texto ">Profissão</h2>
            <input type="text mb-3 " class="form-control-lg caixa custom-margin" name="profissao" id="exampleInputEmail1" placeholder="Profissão" value="<?php echo "{$cooperado['profissao']}";?>" readonly>
            <h2 class="texto ">Experiência Profissional</h2>
            <textarea class="form-control caixa2 custom-margin" name="experiencia" placeholder="Expêriencia Profissional" readonly ><?php echo "{$cooperado['experiencia']}";?></textarea>            
            
          </div>
        </div> 
      </div> 
  </form>
  <div class="container-fluid d-flex justify-content-center align-items-center">
  
  
  <button type="submit" class="btn btn-primary botao col-5" onclick="window.location.href='editarcadastro.php?select=<?php echo $cooperado ['id_cooperado'];?>'">Editar</button>

  <button class="btn btn-primary botao col-5"  onclick="confirmarExclusao(<?php echo $cooperado['id_cooperado']; ?>)">Excluir</button>
  </div>
</main>    
<footer>
</footer>
    </body>
</html>


