<?php
require_once '../vendor/autoload.php';

$path = realpath('.');

$files = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($path),
                RecursiveIteratorIterator::SELF_FIRST
             );

    foreach ($files as $name => $file) {
        echo "$name\n";
    }



$teams = array(
    'Popular Football Teams',
    array(
        'La Lega',
        array('Real Madrid', 'FC Barcelona', 'Athletico Madrid', 'Real  
    Betis', 'Osasuna')
    ),
    array(
        'English Premier League',
        array('Manchester United', 'Liverpool', 'Manchester City', 'Arsenal',
            'Chelsea')
    )
);

$tree = new RecursiveTreeIterator(
    new RecursiveArrayIterator($teams), null, null, RecursiveIteratorIterator::LEAVES_ONLY
);
foreach ($tree as $leaf)
    echo $leaf . '<br />';


function array_sum_recursive(array $array) {
    $sum = 0;
    array_walk_recursive($array, function($v) use (&$sum) {
        $sum += $v;
    });

    return $sum;
}

$arr =
    [1, 2, 3, 4, 5, [6, 7, [8, 9, 10, [11, 12, 13, [14, 15, 16]]]]];

echo array_sum_recursive($arr);