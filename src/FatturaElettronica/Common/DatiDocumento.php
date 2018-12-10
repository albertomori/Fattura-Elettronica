<?php

namespace FatturaElettronica\Common;

class DatiDocumento  
{
    public $RiferimentoNumeroLinea;
    public $IdDocumento;
    public $Data;
    public $NumItem;
    public $CodiceCommessaConvenzione;
    public $CodiceCUP;
    public $CodiceCIG;

    public function __construct()
    {
        $this->RiferimentoNumeroLinea = [];
    }
}
