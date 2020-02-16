<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header('Location:index.php');
    }
    $nivel = 0;
    if(isset($_SESSION['nivel'])){
        $nivel = $_SESSION['nivel'];
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Página Principal</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <header class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="text-primary" >Sistema De Níveis de Usuário</h1>
            </div>
            <div class="col-sm-12 text-right">
               <a href="exit.php" class="btn btn-primary">Sair</a>
            </div>
        </div>
    </header>
    <section class="container">
        <?php if($nivel == 1) : ?>
          <h3>Logado como administrador</h3>
        <?php else :?>
          <h3>Logado como usuário comum</h3>
        <?php endif ?>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>