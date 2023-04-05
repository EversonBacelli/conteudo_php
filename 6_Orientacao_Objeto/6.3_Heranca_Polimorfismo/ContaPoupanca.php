<?php

    class ContaPoupanca extends Conta{
        public function taxaServico()
        {
            $this->saldo = $this->saldo -5;
        }
    }
?>