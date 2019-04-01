<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
use crafter\account\Account;
use crafter\account\Person;
$account = new Account(200);
$person = new Person("Adan","Pietras",$account);
$account->addBalance(100);
$account->addBalance(100);

$person2 = clone $person;

$person->setFirstname("Grzegorz");
$account->addBalance(100);

dump($person);
dump($person2); die();