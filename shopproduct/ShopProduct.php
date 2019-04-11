<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 10/04/2019
 * Time: 20:21
 */

namespace crafter\shopproduct;


class ShopProduct implements ShopProductInterface {

  /**
   * @var string
   */
  protected $name;

  /**
   * @var float
   */
  protected $price;

  /**
   * ShopProduct constructor.
   *
   * @param string|NULL $name
   * @param float|NULL $price
   */
  public function __construct(string $name = null,float $price = null) {
    $this->name = $name;
    $this->price = $price;
  }

  /**
   * @param string $name
   */
  public function setName(string $name) {
    $this->name = $name;
  }

  /**
   * @return string
   */
  public function getName(): string {
    return $this->name;
  }

  /**
   * @param float $price
   */
  public function setPrice(float $price) {
    $this->price = $price;
  }

  /**
   * @return float
   */
  public function getPrice(): float {
    return $this->price;
  }


}