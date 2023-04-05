<?php

    class Conta{
        protected $agencia;
        protected $conta;
        protected $cliente;
        private $senha;
        protected $saldo;

        function __construct($agencia, $conta, $cliente, $senha, $saldo)
        {
            $this->agencia = $agencia;
            $this->conta = $conta;
            $this->cliente = $cliente;
            $this->senha = $senha;
            $this-> saldo = $saldo;
        }

        public function taxaServico(){}

        public function getAgencia() {return $this->agencia;}


        public function setAgencia($agencia)
        {
                $this->agencia = $agencia;
                return $this;
        }

        public function getConta() {return $this->conta;}

        public function setConta($conta)
        {
                $this->conta = $conta;
                return $this;
        }


        public function getSaldo(){return $this->saldo;}

        public function setSaldo($saldo)
        {
                $this->saldo = $saldo;
                return $this;
        }

        public function getSenha(){return $this->senha;}

        public function setSenha($senha)
        {
                $this->senha = $senha;
                return $this;
        }

        public function getCliente()
        {return $this->cliente;}

        public function setCliente($cliente)
        {
                $this->cliente = $cliente;
                return $this;
        }
    }

?>