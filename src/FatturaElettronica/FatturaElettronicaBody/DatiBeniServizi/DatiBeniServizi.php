<?php

namespace FatturaElettronica\FatturaElettronicaBody\DatiBeniServizi;

class DatiBeniServizi
{
    public $DettaglioLinee;
    public $DatiRiepilogo;

    public function __construct()
    {
        $this->DettaglioLinee = [new DettaglioLinee()];
        $this->DatiRiepilogo = [new DatiRiepilogo()];
    }
}