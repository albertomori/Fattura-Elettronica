<?php

namespace FatturaElettronica\FatturaElettronicaHeader;

class FatturaElettronicaHeader
{
    public $DatiTrasmissione;
    public $CedentePrestatore;
    public $RappresentanteFiscale;
    public $CessionarioCommittente;
    public $TerzoIntermediarioOSoggettoEmittente;
    public $SoggettoEmittente;

    public function __construct()
    {
        $this->DatiTrasmissione = new DatiTrasmissione\DatiTrasmissione();
        $this->CedentePrestatore = new CedentePrestatore\CedentePrestatore();
        $this->RappresentanteFiscale = new RappresentanteFiscale\RappresentanteFiscale();
        $this->CessionarioCommittente = new CessionarioCommittente\CessionarioCommittente();
        $this->TerzoIntermediarioOSoggettoEmittente = new TerzoIntermediarioOSoggettoEmittente\TerzoIntermediarioOSoggettoEmittente();
    }
}
