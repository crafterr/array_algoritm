<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 11/04/2019
 * Time: 16:57
 */

namespace crafter\shopproduct\discount;


use crafter\shopproduct\ShopProductInterface;

class ContextDiscount {

  /**
   * @var \crafter\shopproduct\discount\DiscountInterface
   */
  private $discountStrategy;

  /**
   * ContextDiscount constructor.
   *
   * @param \crafter\shopproduct\discount\DiscountInterface $discountStrategy
   */
  public function __construct(DiscountInterface $discountStrategy) {
    $this->discountStrategy = $discountStrategy;
  }

  /**
   * @param \crafter\shopproduct\ShopProductInterface $product
   * @param $discount
   */
  public function discount(ShopProductInterface $product,$discount) {
      $product->setPrice($this->discountStrategy->calculate($product,$discount));
  }
}