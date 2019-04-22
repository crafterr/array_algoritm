<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use crafter\shopproduct\XmlWriter;
use crafter\shopproduct\BookProduct;
use crafter\shopproduct\CdProduct;
use crafter\shopproduct\XProduct;
use crafter\shopproduct\TextWriter;
use crafter\shopproduct\discount\DiscountPercentage;
use crafter\shopproduct\discount\ContextDiscount;
use crafter\shopproduct\discount\DiscountAmount;

$book1 = new BookProduct('Ksiazka 1',10);
$book2 = new BookProduct('Ksiazka 2',20);
$cd = new CdProduct('Plyta 1',10);
$cd2 = new CdProduct('Plyta 2',20);
$cd3 = new CdProduct('Plyta 3',30);
$book3 = new BookProduct("Ksiazk 3",100);
$x1 = new XProduct("X product",400);

$tablica = [$book1,$book2,$cd,$cd2,$cd3];
$xmlWritter = new XmlWriter();
$xmlWritter->addProduct($book3);
$xmlWritter->addProduct($x1);
$xmlWritter->addProducts($tablica);

$textWriter = new TextWriter();
$textWriter->addProduct($book1);
$textWriter->addProduct($book2);
//echo $xmlWritter->print();

$discountPercentage = new ContextDiscount(new DiscountPercentage());
$discountAmount = new ContextDiscount(new DiscountAmount());


//$discountPercentage->discount($book1,10);

//$discountPercentage->discount($book2,10);

//$discountAmount->discount($book1,2);


//echo $textWriter->print();
$discountPercentage->discount($book3,10);
$discountAmount->discount($book3,10);

echo $xmlWritter->print();
