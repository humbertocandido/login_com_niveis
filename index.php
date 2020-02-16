<?php
    require 'App/Modelo/Usuario.php';
    require 'App/Modelo/UsuarioDao.php';

    use App\Modelo\Usuario;
    use App\Modelo\UsuarioDao;

    $u = new Usuario();
    $u->setEmail('humberto@teste.com');
    $u->setSenha('1233454');
    $u->setNivel(0);

    // $dao = new UsuarioDao();
    // $dao->salvar($u);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Sistema de login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3330e52b6a.js" crossorigin="anonymous"></script>
  </head>
  <body class="bg-secondary">
      <header class="container-fluid text-center bg-dark text-light py-4">
        <h1 class="text-primary">Sistema De Login</h1>
      </header>
      <section id="login" class="container mt-5 pt-5">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 bg-dark p-3 rounded">
              <div class="col-auto">
                <h3 class="text-center text-primary pb-2 mb-3">Login</h3>
              </div>
                <form action="App/Controller/logar.php" method="post">
                    <div class="col-auto">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" class="form-control" name="usuario" placeholder="Usuário">
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha">
                      </div>
                    </div>
                    <div class="col-auto">
                      <input type="submit" value="Logar" class="btn btn-block btn-primary">
                    </div>
                </form>
                <?php if(!empty($_GET['login']) == 'erro') :?>
                <div class="col-auto mt-2">
                  <div class="alert alert-danger mt-3">Ops! Usuário e/ou senha incorreto(s)</div>
                </div>
                <?php endif?>
            </div>
            <div class="col-sm-4"></div>
        </div>
      </section>
      <footer class="container-fluid fixed-bottom p-3 pl-5 text-white bg-primary">
        Desenvolvido por Humberto Candido
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>