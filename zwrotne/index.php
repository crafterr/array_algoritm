<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use crafter\zwrotne\Product;
use crafter\zwrotne\ProcessSale;

$product = new Product("Buty",12);
$product2 = new Product("Majtki",15);

$sale = new ProcessSale();
//$logger = create_function('$product','print " zapisano ({$product->name}) cena: $product->price\n";' );
$logger = function(Product $product) {
  echo 'zapisano '.$product->name.' cena: '.$product->price.'<br />';
};
$logger2 = function(Product $product) {
  echo 'No i wywolujemy logger 2 <br />';
};
$sale->registerCallback($logger);
$sale->registerCallback($logger2);
$sale->sale($product);
$sale->sale($product2);
