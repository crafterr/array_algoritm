<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 03/04/2019
 * Time: 14:36
 */

namespace crafter\strategy;


class Client {
  private $output;

  /**
   * Client constructor.
   *
   * @param \crafter\strategy\OutputInterface $output
   */
  public function __construct(OutputInterface $output) {
    $this->output = $output;
  }

  /**
   * @return mixed
   */
  public function loadOutput() {
    return $this->output->load();
  }
}