<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);


function findBook($name,$bookList)
{
    if (count($bookList)==0) {
        return 0;
    }

    $found = false;
    foreach ($bookList as $key => $item)
    {
        if ($item === $name)
        {
            $found = $key;
            break;
        }
    }

    return $found;
}

function placeAll($orderedBook, &$bookList)
{
    foreach ($orderedBook as $result)
    {
        $bookFind = findBook($result,$bookList);

        if ($bookFind !== FALSE) {
            array_splice($bookList,$bookFind,1);
        }
    }
}

/*$bookList = ['PHP','MySQL','PGSQL','Oracle','Java'];

$orderedBooks = ['MySQL','PGSQL','Java'];
//echo findBook("MySQL",$bookList);

placeAll($orderedBooks,$bookList);
dump($bookList);*/


