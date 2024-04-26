<?php
                // Conectar ao banco de dados (inclua seu código de conexão aqui)
                include_once('conexao.php');
                // Receber o ID do cadastro (por exemplo, via GET)
                $id_cadastro = $_GET['id_cooperado'];

                // Consultar o cadastro no banco de dados
                $consulta = $conn->query("SELECT * FROM infocooperados WHERE id_cooperado = $id_cadastro");
                $registro = $consulta->fetch(PDO::FETCH_ASSOC);

                // Extrair os dados do cadastro para variáveis
                $nome = $registro['nome'];
                $email = $registro['email'];
            ?>
<!doctype html>
<html lang="pt_br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GNS - Arquivos </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
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
                <input type="text" class="form-control py-3 fs-4" name="nome" id="nome" value="<?php echo $nome; ?>" disabled>
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