<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
use crafter\strategy\ArrayOutput;
USE crafter\strategy\Client;

/**
 * Strategy Pattern
 */
$client = new Client(new ArrayOutput());
echo $client->loadOutput();

