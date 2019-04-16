<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 16/04/2019
 * Time: 18:23
 */

namespace crafter\compozycja;


interface SalaryCalculable {

  /**
   * @return float
   */
  public function calculateSalaryPerHour():float;

  /**
   * @return float
   */
  public function calculateSalaryPerMonth():float;
}