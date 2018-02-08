<?php
declare(strict_types=0);
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH . 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', "1");

$agents = new SplQueue();

$agents->enqueue("Fred");
$agents->enqueue("John");
$agents->enqueue("Keith");
$agents->enqueue("Adiyan");
$agents->enqueue("Mikhael");

$agents->dequeue(); //fred aut

echo $agents->top();
echo $agents->bottom();
dump($agents);


