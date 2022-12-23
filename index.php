<?php

require_once __DIR__ . '/autoload.php';

use MyNamespace\Controllers\RiponController;
use MyNamespace\Controllers\MasiurController;

$riponController = new RiponController();
$masiurController = new MasiurController();

echo "<pre>";
print_r($riponController->index());
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r($riponController->serviceFunctionOfRipon());
echo "</pre>";

echo "<hr>";

echo "<pre>";
print_r($riponController->serviceFunctionOfMasiur());
echo "</pre>";


echo "<hr>";
echo $riponController->demoView();

echo "<hr>";
echo "<pre>";
print_r($masiurController->myfunction());
echo "</pre>";