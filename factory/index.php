<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
use crafter\factory\Automobile;
use crafter\factory\AutomobileFactory;


$opel = AutomobileFactory::create("Opel","vectra");

dump($opel->getMakeAndModel());


