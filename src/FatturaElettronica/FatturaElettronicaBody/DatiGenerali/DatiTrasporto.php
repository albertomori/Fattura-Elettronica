<?php

namespace FatturaElettronica\FatturaElettronicaBody\DatiGenerali;

class DatiTrasporto
{
    public $DatiAnagraficiVettore;
    public $MezzoTrasporto;
    public $CausaleTrasporto;
    public $NumeroColli;
    public $Descrizione;
    public $UnitaMisuraPeso;
    public $PesoLordo;
    public $PesoNetto;
    public $DataOraRitiro;
    public $DataInizioTrasporto;
    public $TipoResa;
    public $IndirizzoResa;
    public $DataOraConsegna;

    public function __construct()
    {
        $this->DatiAnagraficiVettore = new DatiAnagraficiVettore();
        $this->IndirizzoResa = new IndirizzoResa();
    }
}