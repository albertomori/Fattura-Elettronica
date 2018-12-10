<?php

namespace FatturaElettronica\Common;

class DenominazioneNomeCognome  
{
    public $Denominazione;
    public $Nome;
    public $Cognome;

    public function CognomeNome()
    {
        return $this->Cognome . " " . $this->Nome;
    }
}
