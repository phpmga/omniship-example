<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';

$carrier = \Omniship\Omniship::create('Correios');

$accessData = new \PhpSigep\Model\AccessDataHomologacao();

var_dump($carrier->quote(['accessData' => $accessData])->send());
