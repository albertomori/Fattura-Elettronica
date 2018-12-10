<?php

namespace FatturaElettronica\FatturaElettronicaBody\DatiGenerali;

class DatiDDT
{
    public $NumeroDDT;
    public $DataDDT;
    public $RiferimentoNumeroLinea;

    public function __construct()
    {
        $this->RiferimentoNumeroLinea = [];
    }
}