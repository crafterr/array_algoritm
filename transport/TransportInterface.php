<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 08/04/2019
 * Time: 18:16
 */

namespace crafter\transport;


interface TransportInterface {
  /**
   * @return string
   */
  public function go();
}