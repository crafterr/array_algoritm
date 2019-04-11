<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 11/04/2019
 * Time: 16:39
 */

namespace crafter\shopproduct\discount;
use crafter\shopproduct\ShopProductInterface;

interface DiscountInterface {
  public function calculate(ShopProductInterface $product,$discount);
}