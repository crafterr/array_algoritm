<?php
require __DIR__.'/vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$graph = [];
$nodes = ['A','B','C','D','E'];



foreach ($nodes as $xNode)
{
    foreach ($nodes as $yNode) {
        $graph[$xNode][$yNode] = 1;
    }
}

//dump($graph);
/**
 * The SplFixedArray method can be very handy when we have a lot of defined
 * arrays with known size or have an upper limit for the maximum required size of the array.
 * But if we do not know the array size, then it is better to use a PHP array.
 */
$array = new SplFixedArray(10);

//$array = [];
for ($i=0; $i < 10; $i++) {
    $array[$i] = $i;
}
for ($i=0; $i < 10; $i++) {
    //echo $array[$i] . "\\n";
}
echo  $array[9];


dump($array); die();

