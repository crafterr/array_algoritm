<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);


$items = 100000;


$startMemory = memory_get_usage();
echo 'Poczatkowa wartosc: '.$startMemory.' bytes<br />';
$array = new SplFixedArray($items);
for ($i=0; $i<$items; $i++)
{
    $array[$i] = $i;
}
$endMemory = memory_get_usage();

echo 'Koncowa wartość: '.$endMemory.' bytes<br />';

$memoryConsumed = ($endMemory - $startMemory) / (1024*1024);
$memoryConsumed = ceil($memoryConsumed);
echo $memoryConsumed .' MB zajmuje tablica od 1..100000';
echo '<br>';

echo 'Każdy element tablicy jest zaalokowane :'.round(($endMemory - $startMemory)/100000).' bytes';


/**
 * Note
 * $array = new SplFixedArray(100000);
 * php 5.6 or bellow  - 6MB
 * php 7 - 2MB
 */

