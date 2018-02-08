<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 03/02/2018
 * Time: 22:17
 */

interface StackInterface
{
    public function push(string $item);

    public function pop();

    public function top();

    public function isEmpty();
}
