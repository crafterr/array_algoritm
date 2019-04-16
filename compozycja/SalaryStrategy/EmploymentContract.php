<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 16/04/2019
 * Time: 18:35
 */

namespace crafter\compozycja\SalaryStrategy;


final class EmploymentContract implements SalaryStrategyInterface {

  public function calculate(float $salaryPerHour): float {
    return $salaryPerHour;
  }


}