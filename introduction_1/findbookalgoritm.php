<?php
require __DIR__.'/vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$data = [
    'adam','marek','grzesiek'
];
function findBook(array $bookList, string $book_name):int
{
    $count = count($bookList);
    if ($count==0)
        return 0;
    $found = false;

    foreach($bookList as $index => $item)
    {
        if ($item === $book_name) {
            $found = $index;
            break;
        }
    }
    return $found;
}

function placeAllBooks(array $orderedBooks, array &$bookList) {
    foreach ($orderedBooks as $book) {
        $bookFind = findBook($bookList,$book);
        if ($bookFind !== FALSE) {
            array_splice($bookList,$bookFind,1);
        }
    }
}



$bookList = ['PHP','MySQL','PGSQL','Oracle','Java'];
$orderedBooks = ['MySQL','PGSQL','Java'];


placeAllBooks($orderedBooks,$bookList);

dump($bookList);


$a = ['adam','marek','maciek'];
array_splice($a,0,1);

dump($a);

