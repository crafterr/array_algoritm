<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 10/02/2018
 * Time: 15:57
 */
namespace crafter\ArrayIterator;

class Item
{
    public $data;

    public function __construct(string $data = NULL)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData(string $data)
    {
        $this->data = $data;
    }


}