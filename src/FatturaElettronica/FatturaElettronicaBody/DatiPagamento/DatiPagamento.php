<?php

namespace FatturaElettronica\FatturaElettronicaBody\DatiPagamento;

class DatiPagamento
{

    public $CondizioniPagamento;
    public $DettagliPagamento;

    public function __construct()
    {
        $this->DettagliPagamento = [new DettaglioPagamento()];
    }
}