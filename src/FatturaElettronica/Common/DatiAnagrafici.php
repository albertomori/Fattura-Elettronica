<?php

namespace FatturaElettronica\Common;

class DatiAnagrafici  
{
    public $IdFiscaleIVA;
    public $CodiceFiscale;
    public $Anagrafica;

    public function __construct()
    {
        $this->IdFiscaleIVA = new IdFiscaleIVA();
        $this->Anagrafica =  new Anagrafica();
    }
}
