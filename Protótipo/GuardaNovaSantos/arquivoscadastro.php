
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gns - arquivos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylearquivos.css">  
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
</head>
  <body>
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark gnsNavCor">
            <div class="d-flex flex-column flex-lg-row  align-items-center">
                <a href="consultar.html"
                class="text-decoration-none px-2 py-3 bg-white rounded-3"
                style="color:#022873; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; margin-left: 10em; "
                >Voltar</a>
                <h1 class="text-white d-flex align-items-center justify-content-center" style="margin-left: 7em; font-family: Poppins; font-size: 40px;"> Consulta</h1>
        </nav>
    </header>
    <main class="tudo">
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <img src="favicon/Logo.svg" class="img-fluid logogns">
        </div>
        <div class="container-fluid d-flex justify-content-center align-items-center">
                  <form action="vercadastro.php" method="get">  
                    <select name="select" class="caixaselect" required>
                        <option value="" disabled selected>Selecione o cooperado cadastrado</option>
                       <?php
                       include_once("conexaocooperado.php");
                       $query = $conn->query("SELECT * FROM infocooperados ORDER BY nome ASC");
                        $registros = $query->fetchAll(PDO::FETCH_ASSOC);
                        print_r($registros);
                       foreach($registros as $option){
                       ?> 
                        <option value="<?php echo $option['id_cooperado']?>"><?php echo $option ['nome']?>
                        </option>
                        <?php
                       }
                        ?>
                    </select>
                <button type="submit" name="buscar"class="btn btn-primary botao col-md-9" >Buscar</button>
            </form> 
             
        </div>
    </main> 
  </body>
</html>