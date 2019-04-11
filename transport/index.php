<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use crafter\transport\TransportationToAirport;
use crafter\transport\Bike;
use crafter\transport\Airplane;
use crafter\transport\Car;

$tranportByBike = new TransportationToAirport(new Bike());
$transportByTrain = new TransportationToAirport(new Airplane());
$transportByCar  = new TransportationToAirport(new Car());
dump($tranportByBike->go());
dump($transportByTrain->go());
dump($transportByCar->go());

