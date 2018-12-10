<?php

namespace FatturaElettronica\FatturaElettronicaHeader\CessionarioCommittente;

use FatturaElettronica\Common\StabileOrganizzazione;

class CessionarioCommittente
{
    public $DatiAnagrafici;
    public $Sede;
    public $StabileOrganizzazione;
    public $RappresentanteFiscale;

    public function __construct()
    {
        $this->DatiAnagrafici = new DatiAnagraficiCessionarioCommittente();
        $this->Sede = new SedeCessionarioCommittente();
        $this->StabileOrganizzazione = new StabileOrganizzazione();
        $this->RappresentanteFiscale = new RappresentanteFiscaleCessionarioCommittente();
    }


}