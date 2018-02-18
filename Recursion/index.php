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
        return 1;
    }

    return $n * silnia($n-1);

}

echo silnia(3);