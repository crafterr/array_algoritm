<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$array = new SplFixedArray(10);

for ($i=0; $i<count($array); $i++)
{
    $array[$i] = $i;
}

for ($i=0; $i<count($array); $i++)
{
    echo $array[$i].' ';
}

echo $array[10];