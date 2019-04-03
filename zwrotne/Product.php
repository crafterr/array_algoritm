<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 01/04/2019
 * Time: 17:12
 */

namespace crafter\zwrotne;


class Product {

  public $price;
  public $name;

  public function __construct(string $name,float $price) {

    $this->name = $name;
    $this->price = $price;
  }
}