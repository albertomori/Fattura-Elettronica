<?php

namespace FatturaElettronica\FatturaElettronicaHeader\CedentePrestatore;

use FatturaElettronica\Common\StabileOrganizzazione;

class CedentePrestatore
{
    public $DatiAnagrafici;
    public $Sede;
    public $StabileOrganizzazione;
    public $IscrizioneREA;
    public $Contatti;
    public $RiferimentoAmministrazione;

    public function __construct() {
       $this->DatiAnagrafici = new DatiAnagraficiCedentePrestatore();
       $this->Sede = new SedeCedentePrestatore();
       $this->StabileOrganizzazione = new StabileOrganizzazione();
       $this->IscrizioneREA = new IscrizioneRea();
       $this->Contatti = new Contatti();
    }
}
