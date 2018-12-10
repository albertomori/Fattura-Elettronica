<?php

namespace FatturaElettronica;

use FatturaElettronica\FatturaElettronicaBody\FatturaElettronicaBody;
use FatturaElettronica\FatturaElettronicaHeader\FatturaElettronicaHeader;

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

    public function get_xml()
    {
        $loader = new \Twig_Loader_Filesystem(dirname(__FILE__) . '/Utility');
        $twig = new \Twig_Environment($loader);
        $template = $twig->load('fattura_template.twig');

        $data = array(
            'FatturaElettronica' => array(
                'versione' => 'FPR12',
                'FatturaElettronicaHeader' => (array) $this->FatturaElettronicaHeader,
                'FatturaElettronicaBody' => (array) $this->FatturaElettronicaBody
            )
        );

        return $template->render($data);
    }

}