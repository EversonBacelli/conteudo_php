<?php
    class Professores {
        private $nome;
        private $sobrenome;
        private $idade;
        private $habilidade;
        private $estadoNascimento;
       
        function __construct($nome, $sobreNome, $idade, $habilidade, $estadoNascimento){
            $this->nome = $nome;
            $this->sobrenome = $sobreNome;
            $this->idade = $idade;
            $this->habilidade=$habilidade;
            $this->estadoNascimento = $estadoNascimento;
        }

        public function getNome() {return $this->nome;}
        public function setNome($nome){$this->nome = $nome;}

        public function getSobrenome(){return $this->sobrenome;}  
        public function setSobrenome($sobrenome) {$this->sobrenome = $sobrenome;}

        public function getIdade(){return $this->idade;}
        public function setIdade($idade){$this->idade = $idade;}

        public function getHabilidade(){return $this->habilidade;}
        public function setHabilidade($habilidade) {$this->habilidade = $habilidade;}

        public function getEstadoNascimento(){ return $this->estadoNascimento;}
        public function setEstadoNascimento($estadoNascimento) {$this->estadoNascimento = $estadoNascimento;
        }      
    }
?>