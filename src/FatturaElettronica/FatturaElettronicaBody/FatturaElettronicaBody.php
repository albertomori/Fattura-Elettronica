<?php

namespace FatturaElettronica\FatturaElettronicaBody;

use FatturaElettronica\FatturaElettronicaBody\Allegati\Allegati;
use FatturaElettronica\FatturaElettronicaBody\DatiBeniServizi\DatiBeniServizi;
use FatturaElettronica\FatturaElettronicaBody\DatiGenerali\DatiGenerali;
use FatturaElettronica\FatturaElettronicaBody\DatiPagamento\DatiPagamento;
use FatturaElettronica\FatturaElettronicaBody\DatiVeicoli\DatiVeicoli;

class FatturaElettronicaBody
{
    public $DatiGenerali;
    public $DatiBeniServizi;
    public $DatiVeicoli;
    public $DatiPagamento;
    public $Allegati;

    public function __construct()
    {
        $this->DatiGenerali = new DatiGenerali();
        $this->DatiBeniServizi = new DatiBeniServizi();
        $this->DatiVeicoli = new DatiVeicoli();
        $this->DatiPagamento = [new DatiPagamento()];
        $this->Allegati = [new Allegati()];
    }
}
