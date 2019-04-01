<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 01/04/2019
 * Time: 16:47
 */

namespace crafter\account;


class Account {
  private $balance;
  public function __construct(float $balance) {
    $this->balance = $balance;
  }

  public function getBalance():float {
    return $this->balance;
  }

  public function addBalance(float $balance) {
    $this->balance += $balance;
  }
}