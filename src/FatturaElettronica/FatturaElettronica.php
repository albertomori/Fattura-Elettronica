<?php

namespace FatturaElettronica;

class FatturaElettronica
{
    public $FatturaElettronicaHeader;
    public $FatturaElettronicaBody;

    public function __construct() {
        $this->FatturaElettronicaHeader = new FatturaElettronicaHeader();
        $this->FatturaElettronicaBody = [new FatturaElettronicaBody()];
    }

    public function get_this()
    {
        return $this;
    }

}