<?php
//echo __DIR__; die();
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

//sequential numeric arary
$array = [10,20,30,40,50];
$array[] = 60;
$array[] = 70;

$arraySize = count($array);


for ($i=0; $i<$arraySize; $i++)
{
    echo "Position {$i} holds the value $array[$i] <br />";
}

echo '<hr />';
//not sequential numeric array
$array2 = [];
$array2[10] = 100;
$array2[21] = 200;
$array2[29] = 300;
$array2[500] = 1000;
$array2[1001] = 10000;
$array2[71] = 1971;

foreach ($array2 as $index => $result)
{
    echo "Position {$index} holds the value $result <br />";
}

dump($array2); die();