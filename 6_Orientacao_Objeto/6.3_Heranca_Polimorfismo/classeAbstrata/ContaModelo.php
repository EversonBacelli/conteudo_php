<?php
    abstract class ContaModelo{
        protected $agencia;
        protected $conta;
        protected $cliente;
        protected $senha;
        protected $saldo;

        function __construct($agencia, $conta, $cliente, $senha, $saldo)
        {
            $this->agencia = $agencia;
            $this->conta = $conta;
            $this->cliente = $cliente;
            $this->senha = $senha;
            $this-> saldo = $saldo;
        }
        
        abstract function cobrancaMensal();
    }
?>