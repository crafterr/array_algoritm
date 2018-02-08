<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 03/02/2018
 * Time: 22:23
 */

class Node
{
    public $data = NULL;

    public $next = NULL;

    public $priority = NULL;

    public function __construct(string $data = NULL, $priority = NULL)
    {
        $this->data = $data;
        $this->priority = $priority;
    }
}