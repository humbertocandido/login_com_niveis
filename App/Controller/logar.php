<?php
    require __DIR__.'/../Modelo/UsuarioDao.php';
    require __DIR__.'/../Modelo/Usuario.php';

    use App\Modelo\Usuario;
    use App\Modelo\UsuarioDao;

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
        $usuario = new Usuario();
        $usuario->setEmail($_POST['usuario']);
        $usuario->setSenha($_POST['senha']);

        $dao = new UsuarioDao();
        $resultado = $dao->getUsuario($usuario);

        if($resultado != NULL){
            session_start();
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = $resultado->getEmail();
            $_SESSION['nivel'] = $resultado->getNivel();
            header('Location:/logado.php');
        }else{
            header('Location:/index.php?login=erro');
        }

    }else{
        header('Location:/index.php?login=erro');
    }
?>