<?php
include_once("conexao.php");

// Verifica se o formulário foi enviado
if(isset($_GET['buscar'])) {
    // Verifica se foi selecionado um cooperado
    if(isset($_GET['select'])) {
        $id = $_GET['select'];

        // Busca as informações do cooperado no banco de dados
        $stmt = $conn->prepare("SELECT * FROM infocooperados WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $cooperado = $stmt->fetch(PDO::FETCH_ASSOC);

    }
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
    <!-- confirmação -->
    <script>
      function confirmarExclusao(id_cooperado) {
          var confirmacao = confirm("Tem certeza que deseja excluir este cadastro?");
          if (confirmacao) {
              window.location.href = 'excluircadastro.php?select=' + id_cooperado;
          }
      }
      </script>
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
        <div class="container Formulario">
            <div class="row">
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Nome</label>
                <input type="text" class="form-control py-3 fs-4" name="nome" id="" placeholder="Nome" value="<?php echo "{$cooperado['nome']}";?>" readonly>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Data de nascimento</label>
                <input type="date" class="form-control py-3 fs-4" name="nascimento" id="" placeholder="Texto Exemplo" value="<?php echo "{$cooperado['nascimento']}";?>" readonly>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Celular</label>
                <input type="tel" class="form-control py-3 fs-4" maxlength="15" onkeyup="handlePhone(event)"  name="celular" id="" placeholder="Texto Exemplo" value="<?php echo "{$cooperado['celular']}";?>" readonly>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Email</label>
                <input type="text" class="form-control py-3 fs-4" name="email" id="" placeholder="Texto Exemplo" value="<?php echo "{$cooperado['email']}";?>" readonly>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">UF</label>
                <input type="text" class="form-control py-3 fs-4" name="uf" id="" placeholder="Texto Exemplo" value="<?php echo "{$cooperado['uf']}";?>" readonly>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Estado civil</label>
                <select class="form-select py-3 fs-4" name="estadocivil" id="floatingSelectGrid">
                  <option selected value="<?php echo "{$cooperado['estadocivil']}";?>" readonly></option>
                </select>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">CEP</label>
                <input type="text" class="form-control py-3 fs-4" onblur="pesquisacep(this.value);" onkeyup="handleZipCode(event)"  maxlength="9"  name="cep" id="cep" placeholder="CEP" value="<?php echo "{$cooperado['cep']}";?>" readonly>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Cidade</label>
                <input type="text" class="form-control py-3 fs-4" name="cidade" id="cidade" placeholder="Texto Exemplo" value="<?php echo "{$cooperado['cidade']}";?>" readonly>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Bairro</label>
                <input type="text" class="form-control py-3 fs-4" name="bairro" id="bairro" placeholder="Texto Exemplo" value="<?php echo "{$cooperado['bairro']}";?>" readonly>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Rua</label>
                <input type="text" class="form-control py-3 fs-4" name="rua" id="rua" placeholder="Texto Exemplo" value="<?php echo "{$cooperado['rua']}";?>" readonly>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Número</label>
                <input type="number" class="form-control py-3 fs-4" name="numero" id="numero" placeholder="Texto Exemplo" value="<?php echo "{$cooperado['numero']}";?>"readonly>
              </div>
              <div class="col-md-6 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Complemento</label>
                <input type="text" class="form-control py-3 fs-4" name="complemento" id="" placeholder="Texto Exemplo"value="<?php echo "{$cooperado['complemento']}";?>" readonly>
              </div>
              <div class="col-md-12 col-sm-3 my-3">
                <label for="username" class="form-label caixa fs-2">Experiencia Profissional</label>
                <textarea class="form-control caixa2 custom-margin" name="experiencia" placeholder="Expêriencia Profissional" readonly> <?php echo "{$cooperado['experiencia']}";?> </textarea>
              </div>
              <div class="col-md-6 col-sm-3 my-4">
                <button type="submit" class="form-control fs-4 btn text-decoration-none px-4 py-2 bg-white rounded-3 fs-4 fw-bold"> Editar </button>
              </div>
              <div class="col-md-6 col-sm-3 my-4">
                <button type="submit" class="form-control fs-4 btn text-decoration-none px-4 py-2 bg-white rounded-3 fs-4 fw-bold" onclick="confirmarExclusao(<?php echo $cooperado['id_cooperado']; ?>)"> Excluir </button>
              </div>
            </div>
          </div>
    </section>
    <!-- Scripts adicionais / Mascaras -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/buscaCEP.js"></script>
    <script src="js/mascaraCEP.js"></script>
    <script src="js/mascaraTelefone.js"></script>
  </body>
</html>