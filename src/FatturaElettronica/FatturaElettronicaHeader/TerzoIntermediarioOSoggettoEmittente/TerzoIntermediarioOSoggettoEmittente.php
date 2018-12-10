<?php

namespace FatturaElettronica\FatturaElettronicaHeader\TerzoIntermediarioOSoggettoEmittente;

class TerzoIntermediarioOSoggettoEmittente
{
    public $DatiAnagrafici;

    public function __construct()
    {
        $this->DatiAnagrafici = new DatiAnagraficaTerzoIntermediarioOSogettoEmittente();
    }
}