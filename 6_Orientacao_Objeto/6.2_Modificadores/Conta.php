<?php
    class Conta{
        public $titular;
        protected $numero;
        private $cpf;

        function __construct($nome, $cpf)
        {
            $this->titular = $nome;
            $this->numero = rand(1000, 100000);
            $this->cpf = $cpf;   
        }
    }
?>