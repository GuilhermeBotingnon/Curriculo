<?php
include_once("conexao.php");
include_once("protect.php");

// Verifica se o formulário foi enviado
if (isset($_GET['buscar'])) {
  // Verifica se foi selecionado um cooperado
  if (isset($_GET['select'])) {
    $id_cooperado = $_GET['select'];

    // Busca as informações do cooperado no banco de dados
    $stmt = $conn->prepare("SELECT * FROM infocooperados WHERE id = :id_cooperado");
    $stmt->bindParam(':id_cooperado', $id_cooperado, PDO::PARAM_INT);
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
  <title>GNS - Arquivos </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/main.css">
  <script>
    function confirmarExclusao(id_cooperado) {
      var confirmacao = confirm("Tem certeza que deseja excluir este cadastro?");
      if (confirmacao) {
        window.location.href = 'excluirCadastro.php?select=' + id_cooperado;
      }
    }
  </script>
</head>

<body>
  <!-- Nav Bar -->
  <nav class="navbar fixed-top gnsCor">
    <div class="container">
      <a class="navbar-brand" href="consulta.php">
        <button class="btn text-decoration-none px-2 py-2 bg-white rounded-3 fs-5 fw-bold" style="color: #022873; font-family: Poppins;"> Voltar </button>
      </a>
      <h1 class="d-flex justify-content-center fs-1 text-white fw-bold" style="font-family: Poppins; margin-right: 15px;">
        Editar
      </h1>
      <!-- Botão De Excluir -->
      <button class="btn text-decoration-none px-2 py-2 bg-white rounded-3 fs-5 fw-bold" style="color: #022873; font-family: Poppins;" onclick="confirmarExclusao(<?php echo $cooperado['id']; ?>)"> Excluir </button>
    </div>
  </nav>
  <!-- Começo Formulario -->
  <section class="Main d-flex justify-content-center">
    <div class="container Formulario">
      <div class="row">
        <div class="col-md-6 col-sm-3 my-3">
          <label for="username" class="form-label caixa fw-medium fs-2">Nome</label>
          <input type="text" class="form-control py-3 fs-4 fw-medium " name="nome" value="<?php echo "{$cooperado['nome']}"; ?>" disabled>
        </div>
        <div class="col-md-6 col-sm-3 my-3">
          <label for="username" class="form-label caixa fw-medium fs-2">Data de nascimento</label>
          <input type="date" class="form-control py-3 fs-4 fw-medium " name="nascimento" value="<?php echo "{$cooperado['nascimento']}"; ?>" placeholder="Texto Exemplo" required disabled>
        </div>
        <div class="col-md-6 col-sm-3 my-3">
          <label for="username" class="form-label caixa fw-medium fs-2">Celular</label>
          <input type="tel" class="form-control py-3 fs-4 fw-medium " maxlength="15" onkeyup="handlePhone(event)" name="celular" value="<?php echo "{$cooperado['celular']}"; ?>" placeholder="Texto Exemplo" required disabled>
        </div>
        <div class="col-md-6 col-sm-3 my-3">
          <label for="username" class="form-label caixa fw-medium fs-2">Email</label>
          <input type="text" class="form-control py-3 fs-4 fw-medium " name="email" value="<?php echo "{$cooperado['email']}"; ?>" placeholder="Texto Exemplo" required disabled>
        </div>
        <div class="col-md-6 col-sm-3 my-3">
          <label for="username" class="form-label caixa fw-medium fs-2">UF</label>
          <input type="text" class="form-control py-3 fs-4 fw-medium " name="uf" value="<?php echo "{$cooperado['uf']}"; ?>" placeholder="Texto Exemplo" required disabled>
        </div>
        <div class="col-md-6 col-sm-3 my-3">
          <label for="username" class="form-label caixa fw-medium fs-2">Estado civil</label>
          <select class="form-select py-3 fs-4 fw-medium " disabled name="estadocivil" id="floatingSelectGrid">
            <option selected disabled value=""><?php echo "{$cooperado['estadocivil']}"; ?></option>
          </select>
        </div>
        <div class="col-md-6 col-sm-3 my-3">
          <label for="username" class="form-label caixa fw-medium fs-2">CEP</label>
          <input type="text" class="form-control py-3 fs-4 fw-medium " onblur="pesquisacep(this.value);" onkeyup="handleZipCode(event)" maxlength="9" name="cep" id="cep" value="<?php echo "{$cooperado['cep']}"; ?>" placeholder="CEP" required disabled>
        </div>
        <div class="col-md-6 col-sm-3 my-3">
          <label for="username" class="form-label caixa fw-medium fs-2">Cidade</label>
          <input type="text" class="form-control py-3 fs-4 fw-medium " name="cidade" id="cidade" value="<?php echo "{$cooperado['cidade']}"; ?>" placeholder="Texto Exemplo" required disabled>
        </div>
        <div class="col-md-6 col-sm-3 my-3">
          <label for="username" class="form-label caixa fw-medium fs-2">Bairro</label>
          <input type="text" class="form-control py-3 fs-4 fw-medium " name="bairro" id="bairro" value="<?php echo "{$cooperado['bairro']}"; ?>" placeholder="Texto Exemplo" required disabled>
        </div>
        <div class="col-md-6 col-sm-3 my-3">
          <label for="username" class="form-label caixa fw-medium fs-2">Rua</label>
          <input type="text" class="form-control py-3 fs-4 fw-medium " name="rua" id="rua" value="<?php echo "{$cooperado['rua']}"; ?>" placeholder="Texto Exemplo" required disabled>
        </div>
        <div class="col-md-6 col-sm-3 my-3">
          <label for="username" class="form-label caixa fw-medium fs-2">Número</label>
          <input type="number" class="form-control py-3 fs-4 fw-medium " name="numero" id="numero" value="<?php echo "{$cooperado['numero']}"; ?>" placeholder="Texto Exemplo" required disabled>
        </div>
        <div class="col-md-6 col-sm-3 my-3">
          <label for="username" class="form-label caixa fw-medium fs-2">Complemento</label>
          <input type="text" class="form-control py-3 fs-4 fw-medium " name="complemento" value="<?php echo "{$cooperado['complemento']}"; ?>" placeholder="Texto Exemplo" required disabled>
        </div>
        <div class="col-md-12 col-sm-3 my-3">
          <label for="username" class="form-label caixa fw-medium fs-2">Experiencia Profissional</label>
          <textarea class="form-control fs-2 fw-medium custom-margin" name="experiencia" disabled placeholder="Expêriencia Profissional"> <?php echo "{$cooperado['experiencia']}"; ?> </textarea>
        </div>
        <div class="d-flex justify-content-center col-lg-12 col-sm-3 my-3">
          <button type="submit" class="btn text-decoration-none px-4 py-2 bg-white rounded-3 fs-4 fw-bold" onclick="window.location.href='editarcadastro.php?select=<?php echo $cooperado['id']; ?>'">Editar</button>
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