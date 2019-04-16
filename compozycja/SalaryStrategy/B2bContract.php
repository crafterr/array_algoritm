<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 16/04/2019
 * Time: 18:35
 */

namespace crafter\compozycja\SalaryStrategy;


class B2bContract implements SalaryStrategyInterface {

  /**
   * int additionalrate
   */
  const ADDITIONALRATE = 20;

  public function calculate(float $salaryPerHour): float {
    $numberToAdd = ($salaryPerHour / 100) * self::ADDITIONALRATE;
    return $salaryPerHour + $numberToAdd;
  }

}