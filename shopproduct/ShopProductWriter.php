<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 10/04/2019
 * Time: 20:24
 */

namespace crafter\shopproduct;


abstract class ShopProductWriter {

  /**
   * @var array
   */
  private $products;

  /**
   * @param ShopProductInterface $product
   */
  public function addProduct(ShopProductInterface $product) {
    $this->products[] = $product;
  }

  /**
   * @param array $products
   */
  public function addProducts(array $products) {
    foreach ($products as $index => $product) {
      if ($product instanceof ShopProductInterface) {
        $this->products[] = $product;
      } else {
        throw new \InvalidArgumentException("Nieznany produkt");
      }
    }
  }

  /**
   * @return array
   */
  public function getProducts() {
    return $this->products;
  }

  /**
   * @inheritdoc
   */
  abstract public function print();
}