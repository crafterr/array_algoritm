<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$ronaldo = [
    "name" => "Ronaldo",
    "country" => "Portugal",
    "age" => 31,
    "currentTeam" => "Real Madrid"
];

$messi = [
    "name" => "Messi",
    "country" => "Argentina",
    "age" => 27,
    "currentTeam" => "Barcelona"
];

$team = [
    'player1' => $ronaldo,
    'player2' => $messi
];

dump($team);

/*****this same as a class******/

class Player
{
    public $name;
    public $country;
    public $age;
    public $currentTeam;
}

$player1 = new Player();
$player1->name = 'Ronaldo';
$player1->country = 'Portugal';
$player1->age = 31;
$player1->currentTeam = "Real Madrid";

$player2 = new Player();
$player2->name = 'Messi';
$player2->country = 'Argentina';
$player2->age = 27;
$player2->currentTeam = "Barcelona";

$team = [
    'player1' => $player1,
    'player2' => $player2
];


dump($team);
