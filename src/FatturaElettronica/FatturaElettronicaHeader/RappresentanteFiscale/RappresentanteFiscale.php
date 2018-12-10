<?php

namespace FatturaElettronica\FatturaElettronicaHeader\RappresentanteFiscale;


class RappresentanteFiscale
{
    public $DatiAnagrafici;

    public function __construct()
    {
        $this->DatiAnagrafici = new DatiAnagraficaRappresentanteFiscale();
    }
}