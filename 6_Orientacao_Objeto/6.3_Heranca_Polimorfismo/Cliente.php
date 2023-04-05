<?php
    class Cliente{
        private $nome;
        private $cpf;
        private $nasc;
        private $endereco;
        private $sexo;
        private $telefone;

        function __construct($nome, $cpf, $nasc, $endereco, $sexo, $telefone)
        {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->nasc = $nasc;
            $this->endereco = $endereco;
            $this->sexo = $sexo;
            $this->telefone = $telefone;
        }

        public function getTelefone() {return $this->telefone;}
        
        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;
                return $this;
        }

        
        public function getSexo(){return $this->sexo;}

        public function setSexo($sexo)
        {
                $this->sexo = $sexo;
                return $this;
        }

        public function getEndereco(){return $this->endereco;}

        public function setEndereco($endereco)
        {
                $this->endereco = $endereco;
                return $this;
        }

        public function getNasc() {return $this->nasc;}

        public function setNasc($nasc)
        {
                $this->nasc = $nasc;
                return $this;
        }

        public function getCpf() {return $this->cpf;}

        public function setCpf($cpf)
        {
                $this->cpf = $cpf;
                return $this;
        }

        public function getNome() {return $this->nome;}

        public function setNome($nome)
        {
                $this->nome = $nome;
                return $this;
        }
    }

?>