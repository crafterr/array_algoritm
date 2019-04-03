<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 03/04/2019
 * Time: 14:35
 */

namespace crafter\strategy;


class JsonOutput implements OutputInterface {
  public function load() {
    return 'json output';
  }
}