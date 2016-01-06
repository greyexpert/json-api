<?php

require_once '../vendor/autoload.php';

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use Relay\RelayBuilder;

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals();
$response = new Zend\Diactoros\Response();

$queue = array();

$relayBuilder = new RelayBuilder();
$relay = $relayBuilder->newInstance($queue);

$response = $relay($request, $response);

exit;