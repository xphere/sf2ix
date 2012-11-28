<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require __DIR__ . '/../lib/autoload.php';
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
