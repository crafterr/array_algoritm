<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$graph = [];
$nodes = ['A', 'B', 'C', 'D', 'E'];

foreach ($nodes as $xNode)
{
    foreach ($nodes as $yNode)
    {
        $graph[$xNode][$yNode] = 0;
    }
}


$graph["A"]["B"] = 1;
$graph["B"]["A"] = 1;
$graph["A"]["C"] = 1;
$graph["C"]["A"] = 1;
$graph["A"]["E"] = 1;
$graph["E"]["A"] = 1;
$graph["B"]["E"] = 1;
$graph["E"]["B"] = 1;
$graph["B"]["D"] = 1;
$graph["D"]["B"] = 1;

foreach ($nodes as $xNode)
{
    foreach ($nodes as $yNode)
    {
        echo $graph[$xNode][$yNode].' ';
    }
    echo '<br />';
}





dump($graph);
