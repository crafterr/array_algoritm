<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 10/04/2019
 * Time: 20:26
 */

namespace crafter\shopproduct;


class TextWriter extends ShopProductWriter {

  /**
   * render products as text
   * @inheritdoc
   */
  public function print() {
    $products = $this->getProducts();
    $output = '';
    foreach ($products as $p) {
      $string = $p->getName().', '.$p->getPrice();
      $output .= '<p> - '.$string.'</p>';
    }

    return $output;
  }

}