<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 10/02/2018
 * Time: 18:48
 */

function silnia(int $n) : int
{
    if ($n == 0) {
        return true;
    }

    return $n * silnia($n-1);
}

function silnia2(int $n) : int
{
    $result = 1;
    for ($i = $n; $i > 0; $i--) {
        $result = $result*$i;
    }
    return $result;
}


function fibonacci(int $n) : int
{
    if ($n==0) {
        return 1;
    }
    else if ($n==1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

function zapetlprzezrekurencje($n) {
    if ($n==0) {
        return true;
    }
    echo $n.' - ';
    return zapetlprzezrekurencje($n-1);
}

//echo silnia2(3);
for ($i=0; $i<=3; $i++) {
    echo fibonacci($i).' ';
}


function silniarekurencja(int $n) : int
{
    if ($n==1) {
        return true;
    }

    return $n * silniarekurencja($n-1);
}

function silniapetla(int $n) : int
{
    $result = 1;

    for ($i=$n; $i > 0; $i--)
    {
        $result = $result * $i;
    }
    return $result;
}

function gcd(int $a, int $b): int {
    if ($b == 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}

//echo gcd(4,1);
//zapetlprzezrekurencje(10);