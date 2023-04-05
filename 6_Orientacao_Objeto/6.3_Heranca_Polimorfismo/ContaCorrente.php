<?php

    class ContaCorrente extends Conta{
        
        public function taxaServico()
        {
            $this->saldo = $this->saldo -20;
        }
    }
?>