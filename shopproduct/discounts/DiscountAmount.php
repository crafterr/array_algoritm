<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 11/04/2019
 * Time: 16:40
 */

namespace crafter\shopproduct\discount;


use crafter\shopproduct\ShopProductInterface;

class DiscountAmount implements DiscountInterface {

  public function calculate(ShopProductInterface $product, $discount) {
    return $product->getPrice()-$discount;
  }


}