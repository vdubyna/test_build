<?php

// init autoloader
require_once('ClassLoader/UniversalClassLoader.php');

$loader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerPrefixes(array(
    'Core_' => realpath(__DIR__ . '/../app'),
));

$loader->register();

