<?php

namespace FatturaElettronica\FatturaElettronicaHeader\DatiTrasmissione;

class DatiTrasmissione
{
    public $IdTrasmittente;
    public $ProgressivoInvio;
    public $FormatoTrasmissione;
    public $CodiceDestinatario;
    public $ContattiTrasmittente;
    public $PECDestinatario;

    public function __construct()
    {
        $this->IdTrasmittente = new IdTrasmittente();
        $this->ContattiTrasmittente = new ContattiTrasmittente();
    }
}