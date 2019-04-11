<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 08/04/2019
 * Time: 18:20
 */

namespace crafter\transport;


abstract class Transport implements TransportInterface {

  /**
   * @var string $km
   */
  protected $v = 0;

  const S = 1000;

  /**
   * @return string
   */
  public function go() {
    $t = $this->count();
    return $this->vehicle. ' bedzie jechac '.round($t,2).' h';
  }

  private function count() {
    return self::S/$this->v;
  }
}