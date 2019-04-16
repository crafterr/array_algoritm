<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 16/04/2019
 * Time: 18:27
 */

namespace crafter\compozycja\SalaryStrategy;


interface SalaryStrategyInterface {
  public function calculate(float $salaryPerHour):float;
}