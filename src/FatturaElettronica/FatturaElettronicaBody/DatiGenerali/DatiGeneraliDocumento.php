<?php

namespace FatturaElettronica\FatturaElettronicaBody\DatiGenerali;

use FatturaElettronica\Common\ScontoMaggiorazione;

class DatiGeneraliDocumento
{
    public $TipoDocumento;
    public $Divisa;
    public $Data;
    public $Numero;
    public $DatiRitenuta;
    public $DatiBollo;
    public $DatiCassaPrevidenziale;
    public $ScontoMaggiorazione;
    public $ImportoTotaleDocumento;
    public $Arrotondamento;
    public $Causale;
    public $Art73;

    public function __construct()
    {
        $this->DatiRitenuta = new DatiRitenuta();
        $this->DatiBollo = new DatiBollo();
        $this->DatiCassaPrevidenziale = [new DatiCassaPrevidenziale()];
        $this->ScontoMaggiorazione = [new ScontoMaggiorazione()];
        $this->Causale = [];
    }
}