<?php

define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use crafter\compozycja\Developer;
use crafter\compozycja\SalaryStrategy\B2bContract;
use crafter\compozycja\ProjectManager;
use crafter\compozycja\SalaryStrategy\EmploymentContract;
$developer = new Developer(new B2bContract());
$developer->setSalaryPerHour(50);
$developer->setFirstname("Adam");
$developer->setLastname("Pietras");

$projectManager = new ProjectManager(new EmploymentContract());
$projectManager->setSalaryPerHour(70);
$projectManager->setFirstname("Stuard");
$projectManager->setLastname("Sturad");



dump($projectManager->calculateSalaryPerHour());
dump($projectManager->calculateSalaryPerMonth());