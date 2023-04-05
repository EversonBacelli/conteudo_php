<?php
    class Usuario{
        public $nome;
        public $imagem;
        public $idade;

        function __construct($nome, $imagem, $idade)
        {
            $this->nome = $nome;
            $this->imagem = $imagem;
            $this->idade = $idade;
        }
    }
?>