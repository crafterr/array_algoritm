<?php

use crafter\lesson_strategy\CostStrategy\TimedCostStrategy;
use crafter\lesson_strategy\CostStrategy\FixedCostStrategy;
use crafter\lesson_strategy\Seminar;
use crafter\lesson_strategy\Notifier\RegistrationMgr;
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);


// listing 08.11
$lessons[] = new Seminar(4, new TimedCostStrategy());
$lessons[] = new Seminar(4, new FixedCostStrategy());
$mgr = new RegistrationMgr();
$mgr->register($lessons[0]);
$mgr->register($lessons[1]);
foreach ($lessons as $lesson) {
  //print "Koszt lekcji: {$lesson->cost()}.";
  //print "Sposób rozliczania: {$lesson->chargeType()}.\n";
}