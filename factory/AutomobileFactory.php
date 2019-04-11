<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 03/04/2019
 * Time: 14:45
 */

namespace crafter\factory;


class AutomobileFactory {

  public static function create($make,$model) {
    return new Automobile($make,$model);

  }
}