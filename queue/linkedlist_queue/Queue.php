<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 06/02/2018
 * Time: 14:51
 */

interface Queue
{
    public function enqueue(string $item, int $priority);

    public function dequeue() : string;

    public function peek() : string;

    public function isEmpty() : bool;
}