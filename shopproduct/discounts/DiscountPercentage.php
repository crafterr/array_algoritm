<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 11/04/2019
 * Time: 16:40
 */

namespace crafter\shopproduct\discount;


use crafter\shopproduct\ShopProductInterface;

class DiscountPercentage implements DiscountInterface {

  /**
   * @param \crafter\shopproduct\ShopProductInterface $product
   * @param $discount
   *
   * @return float
   */
  public function calculate(ShopProductInterface $product, $discount) {
    return $product->getPrice() - ($product->getPrice() * ($discount/100));
  }


}