<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__ . '/../lib/autoload.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
