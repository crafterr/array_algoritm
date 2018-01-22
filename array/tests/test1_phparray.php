<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$startMemory = memory_get_usage();
echo 'Poczatkowa wartosc: '.$startMemory.' bytes<br />';
$array = range(1,100000);
$endMemory = memory_get_usage();
echo 'Koncowa wartość: '.$endMemory.' bytes<br />';
$memoryConsumed = ($endMemory - $startMemory) / (1024*1024);
$memoryConsumed = ceil($memoryConsumed);
echo $memoryConsumed .' MB zajmuje tablica od 1..100000';
echo '<br>';

echo 'Każdy element tablicy jest zaalokowane :'.round(($endMemory - $startMemory)/100000).' bytes';


/**
 * Note
 * $array = range(1,100000)
 * php 5.6 or bellow 32bit = 7,4MB | 64bit = 14MB
 * php 7 32bit = 3MB | 64bit = 4MB
 */

