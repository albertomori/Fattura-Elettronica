<?php

require_once __DIR__ . '/vendor/autoload.php';

use \FatturaElettronica\FatturaElettronica;

$test = new FatturaElettronica();

var_dump($test->get_this());