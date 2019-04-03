<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 01/04/2019
 * Time: 17:13
 */

namespace crafter\zwrotne;


class ProcessSale {
  private $callbacks;

  public function registerCallback(callable $callback) {
    if (!is_callable($callback)) {
      throw new \Exception("Niepoprawne wywołanie zwrotne");
    }
    $this->callbacks[] = $callback;
  }

  public function sale(Product $product) {
    echo "{$product->name}: przetwarzanie sprzedaży \n";
    foreach ($this->callbacks as $callback) {
      call_user_func($callback,$product);
    }
  }
}