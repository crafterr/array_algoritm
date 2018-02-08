<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);


$BookTitles = new SplDoublyLinkedList(SplDoublyLinkedList::IT_MODE_LIFO);

$BookTitles->push("Introduction to Algorithm");
$BookTitles->push("Introduction to PHP and Data structures");
$BookTitles->push("Programming Intelligence");
$BookTitles->push("Mediawiki Administrative tutorial guide");
$BookTitles->add(1,"Introduction to Calculus");
$BookTitles->add(3,"Introduction to Graph Theory");

foreach ($BookTitles as $item) {
    echo $item.' | ';
}
echo '<br />';
for ($BookTitles->rewind(); $BookTitles->valid(); $BookTitles->next()) {
    echo $BookTitles->current().' | ';
}
dump($BookTitles);