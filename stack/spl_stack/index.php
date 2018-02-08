<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH . 'vendor/autoload.php';

$books = new SplStack();
$books->push("Introduction to PHP7");
$books->push("Mastering JavaScript");
$books->push("MySQL Workbench tutorial");
$books->pop();
dump($books);
for ($books->rewind(); $books->valid(); $books->next()) {
    echo $books->current().' | ';
}
