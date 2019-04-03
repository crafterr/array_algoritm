<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 03/04/2019
 * Time: 14:36
 */

namespace crafter\strategy;


class ArrayOutput implements OutputInterface {

  public function load() {
    return 'array output';
  }

}