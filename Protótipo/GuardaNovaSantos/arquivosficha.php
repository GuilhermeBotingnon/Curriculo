<!DOCTYPE html>
<html lang="pt_br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GNS - arquivos</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <!-- Nav Bar -->
    <nav class="navbar fixed-top gnsCor">
      <div class="container">
        <a class="navbar-brand" href="consulta.php">
          <button
            class="btn text-decoration-none px-3 py-3 bg-white rounded-3 fs-4 fw-bold"
            style="color: #022873; font-family: Poppins"
          >
            Voltar
          </button>
        </a>
      </div>
    </nav>
    <section class="vh-100 cor">
      <!-- Logo -->
      <div class="container d-flex justify-content-center align-items-center">
        <img src="favicon/Logo.svg" class="img-fluid logo" />
      </div>
      <!-- Lista Select -->
      <form action="verficha.php" method="get">
        <select
          class="form-select form-select-lg mb-3 container cadastros"
          aria-label="Large select example"
        >
          <option selected disabled value="">Selecione uma Ficha</option>
          <?php
                       include_once("conexao.php");
                       $query = $conn->query("SELECT * FROM ficha ORDER BY nome ASC");
                        $registros = $query->fetchAll(PDO::FETCH_ASSOC);

                       foreach($registros as $option){
                       ?> 
                        <option value="<?php echo $option['id_ficha']?>"><?php echo $option ['nome']?>
                        </option>
                        <?php
                       }
                        ?>
        </select>
        <div class="my-3 py-3 d-flex justify-content-center">
          <button type="submit" name="enviar" class="btn text-decoration-none px-4 py-2 bg-white rounded-3 fs-4 fw-bold">Consultar</button>
        <div>
      </form>
    </section>
  </body>
</html>
