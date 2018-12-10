<?php

namespace FatturaElettronica\FatturaElettronicaBody\DatiGenerali;

class DatiGenerali
{
    public $DatiGeneraliDocumento;
    public $DatiOrdineAcquisto;
    public $DatiContratto;
    public $DatiConvenzione;
    public $DatiRicezione;
    public $DatiFattureCollegate;
    public $DatiSAL;
    public $DatiDDT;
    public $DatiTrasporto;
    public $FatturaPrincipale;

    public function __construct()
    {
        $this->DatiGeneraliDocumento = new DatiGeneraliDocumento();
        $this->DatiOrdineAcquisto = [new DatiOrdineAcquisto()];
        $this->DatiContratto = [new DatiContratto()];
        $this->DatiConvenzione = [new DatiConvenzione()];
        $this->DatiRicezione = [new DatiRicezione()];
        $this->DatiFattureCollegate = [new DatiFattureCollegate()];
        $this->DatiSAL = [new DatiSAL()];
        $this->DatiDDT = [new DatiDDT()];
        $this->DatiTrasporto = new DatiTrasporto();
        $this->FatturaPrincipale = new FatturaPrincipale();
    }
}