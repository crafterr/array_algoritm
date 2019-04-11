<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 10/04/2019
 * Time: 20:20
 */

namespace crafter\shopproduct;


interface ShopProductInterface {

  /**
   * @param string $name
   *
   * @return float
   */
  public function setName(string $name);

  /**
   * @return string
   */
  public function getName():string;

  /**
   * @param float $price
   *
   * @return float
   */
  public function setPrice(float $price);

  /**
   * @return float
   */
  public function getPrice():float;
}