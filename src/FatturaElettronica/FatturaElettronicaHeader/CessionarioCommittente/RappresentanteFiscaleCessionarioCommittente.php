<?php

namespace FatturaElettronica\FatturaElettronicaHeader\CessionarioCommittente;

use FatturaElettronica\Common\DenominazioneNomeCognome;
use FatturaElettronica\Common\IdFiscaleIVA;

class RappresentanteFiscaleCessionarioCommittente extends DenominazioneNomeCognome
{
    public $IdFiscaleIVA;

    public function __construct()
    {
        $this->IdFiscaleIVA = new IdFiscaleIVA();
    }
}