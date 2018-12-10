<?php

include './vendor/autoload.php';

$test = new \FatturaElettronica\FatturaElettronica();

echo $test->get_xml();