<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);


$odd = [];
$odd[] = 1;
$odd[] = 3;
$odd[] = 5;
$odd[] = 7;
$odd[] = 9;

$prime = [];
$prime[] = 2;
$prime[] = 3;
$prime[] = 5;

if (in_array(2,$prime)) {
    echo "2 is prime";
}
//unnion zlacz
$union = array_merge($odd,$prime);
dump($union);

//znajdz wspolne 3 i 5
$intersection = array_intersect($odd,$prime);
dump($intersection);

//dopelnienie pokaze niewspolne //1,7,9
$compliment = array_diff($odd, $prime);
dump($compliment);


/******bardziej efektywniejszy sposob*/

$odd = [];
$odd[1] = true;
$odd[3] = true;
$odd[5] = true;
$odd[7] = true;
$odd[9] = true;

$prime = [];
$prime[2] = true;
$prime[3] = true;
$prime[5] = true;

if (isset($prime[2])) {
    echo "2 is prime";
}

$unions = $prime+$odd;

dump($unions);

$intersection = array_intersect_key($odd, $prime);
dump($intersection);
$compliment = array_diff_key($odd, $prime);
dump($compliment);


