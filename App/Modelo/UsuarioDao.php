<?php
    namespace App\Modelo;

    require __DIR__.'/../Conexao/Conexao.php';

    use App\Modelo\Usuario;
    use App\Conexao\Conexao;
use PDO;

class UsuarioDao{
        public function salvar(Usuario $u)
        {
            $sql = 'INSERT INTO usuarios (email,senha,nivel) VALUES (?,?,?)';
            
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1,$u->getEmail());
            $stmt->bindValue(2,$u->getSenha());
            $stmt->bindValue(3,$u->getNivel());
            
            $stmt->execute();
        }

        public function getUsuario(Usuario $u)
        {
            $sql = 'SELECT * FROM usuarios WHERE email=? AND senha=?';
            
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1,$u->getEmail());
            $stmt->bindValue(2,$u->getSenha());
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $usuario = new Usuario();
                foreach($resultado as $dado){
                    $usuario->setId($dado['id']);
                    $usuario->setEmail($dado['email']);
                    $usuario->setSenha($dado['senha']);
                    $usuario->setNivel($dado['nivel']);
                }

                return $usuario;
            }else{
                return null;
            }
        }

        public function deletar(Usuario $u)
        {
            $sql = 'DELETE FROM usuarios WHERE id=?';

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(1,$u->getId);
            $stmt->execute();
        }
    }
?>