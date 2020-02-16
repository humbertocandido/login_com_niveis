<?php
namespace App\Conexao;

use Error;
use PDO;
use PDOException;

class Conexao{
        private static $conexao;
        private static $host = 'localhost';
        private static $nome_banco = 'sistema_login';
        private static $usuario = 'root';
        private static $senha = '';

        public static function getConexao()
        {
            if(!isset($conexao)):
                try{
                    self::$conexao = new PDO('mysql:host='.self::$host.';dbname='.self::$nome_banco.';charset=utf8',self::$usuario,self::$senha);
                }catch(PDOException $e){
                    echo 'Erro' . $e->getMessage() . '</br>';
                    echo 'Código' . $e->getCode();
                }
            endif;

            return self::$conexao;
        }
    }

?>