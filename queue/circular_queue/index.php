<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH . 'vendor/autoload.php';
require_once 'Queue.php';
require_once 'CircularQueue.php';

$cq = new CircularQueue(5);
$cq->enqueue("Adam");
$cq->enqueue("Maciek");
$cq->enqueue("Grzesiek");
$cq->enqueue("Marek");

dump($cq);