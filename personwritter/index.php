<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
use crafter\personwritter\Person;
use crafter\personwritter\PersonWritter;
use crafter\personwritter\PersonWritterInterface;

$person = new Person();
//$person->output(new class implements PersonWritterInterface {
//  public function write(Person $person) {
//    echo 'Mam na imie: '.$person->getName().' i mam: '.$person->getAge().' lat';
//  }
//});

echo $person->output(new PersonWritter());
