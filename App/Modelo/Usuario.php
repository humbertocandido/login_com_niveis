<?php
    namespace App\Modelo;    

    class Usuario{
        private $id;
        private $email;
        private $senha;
        private $nivel;

        public function getNivel()
        {
            return $this->nivel;
        }

        public function setNivel($dado)
        {
            $this->nivel = $dado;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($dado)
        {
            $this->email = $dado;
        }

        public function getSenha()
        {
            return $this->senha;
        }

        public function setSenha($dado)
        {
            $this->senha = $dado;
        }

        public function __toString()
        {
            return $this->getEmail() . "" . $this->getId();   
        }

        
    }
?>
