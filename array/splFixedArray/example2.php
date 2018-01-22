<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$array =[1 => 10, 2 => 100, 3 => 1000, 4 => 10000];

$splArray = SplFixedArray::fromArray($array,false);



dump($splArray);

dump($splArray->toArray());

//change size array later on
//***********************
$item = 5;
$array = new SplFixedArray($item);

for ($i=0; $i<$item; $i++)
{
    $array[$i] = $i;
}
$array->setSize(6);
$array[5] = 5;
dump($array);



