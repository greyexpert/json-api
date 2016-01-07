<?php

require_once '../vendor/autoload.php';

use Relay\RelayBuilder;
use Zend\Diactoros\ServerRequestFactory;
use Zend\Diactoros\Response;



$request = ServerRequestFactory::fromGlobals();
$response = new Response();

$queue = array();

$relayBuilder = new RelayBuilder();
$relay = $relayBuilder->newInstance($queue);

$response = $relay($request, $response);

exit;