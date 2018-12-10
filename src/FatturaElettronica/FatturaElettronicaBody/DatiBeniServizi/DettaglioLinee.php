<?php

namespace FatturaElettronica\FatturaElettronicaBody\DatiBeniServizi;

use FatturaElettronica\Common\ScontoMaggiorazione;

class DettaglioLinee
{
    public $NumeroLiena;
    public $TipoCessionePrestazione;
    public $CodiceArticolo;
    public $Descrizione;
    public $Quantita;
    public $UnitaMisura;
    public $DataInizioPeriodo;
    public $DataFinePeriodo;
    public $PrezzoUnitario;
    public $ScontoMaggiorazione;
    public $PrezzoTotale;
    public $AliquotaIVA;
    public $Ritenuta;
    public $Natura;
    public $RiferimentoAmministrazione;
    public $AltriDatiGestionali;

    public function __construct()
    {
        $this->CodiceArticolo = [new CodiceArticolo()];
        $this->ScontoMaggiorazione = [new ScontoMaggiorazione()];
        $this->AltriDatiGestionali = [new AltriDatiGestionali()];
    }
}