<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH . 'vendor/autoload.php';

require_once 'AgentQueue.php';

$book = new AgentQueue(10);
$book->enqueue("Fred", 1);
$book->enqueue("John", 2);
$book->enqueue("Keith", 3);
$book->enqueue("Adiyan", 4);
$book->enqueue("Mikhael", 2);
$book->enqueue("Marek",5);
//$book->dequeue();
//$book->dequeue();

echo $book->peek();

$book->display();

dump($book);



