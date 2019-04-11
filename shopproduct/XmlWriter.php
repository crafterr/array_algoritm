<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 10/04/2019
 * Time: 20:25
 */

namespace crafter\shopproduct;


class XmlWriter extends ShopProductWriter {

  /**
   * Render products as xml
   * @inheritdoc
   */
  public function print() {

    $products = $this->getProducts();
    echo(header('content-type: text/xml'));
    $output = '<?xml version="1.0" encoding="UTF-8"?>';
    $output .= '<root>';
    foreach ($products as $p) {
      $output .= '<note>'.
                    '<name>'.$p->getName().'</name>'.
                    '<price>'.$p->getPrice().'</price>'.
                '</note>';
    }
    $output .= '</root>';

    return $output;
  }


}