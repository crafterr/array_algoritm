<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH . 'vendor/autoload.php';

require_once 'DeQueue.php';

try {
    $agents = new DeQueue(10);
    $agents->enqueueAtFront("Fred");
    $agents->enqueueAtFront("John");
    $agents->enqueueAtBack("Keith");
    $agents->enqueueAtBack("Adiyan");
    $agents->enqueueAtFront("Mikhael");

    dump($agents); die();
    echo $agents->dequeueFromBack() . "\n";
    echo $agents->dequeueFromFront() . "\n";
    echo $agents->peekFront() . "\n";

    dump($agents);
} catch (Exception $e) {
    echo $e->getMessage();
}