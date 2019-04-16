<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 16/04/2019
 * Time: 18:22
 */

namespace crafter\compozycja;

use crafter\compozycja\SalaryStrategy\SalaryStrategyInterface;
class Employee implements SalaryCalculable {

  /**
   * @var string
   */
  private $firstname;

  /**
   * @var string
   */
  private $lastname;

  /**
   * @var float
   */
  private $salaryPerHour = 0;

  /**
   * @var SalaryStrategyInterface
   */
  private $salaryStrategy;

  /**
   * Employee constructor.
   *
   * @param SalaryStrategyInterface $salaryStrategy
   */
  public function __construct(SalaryStrategyInterface $salaryStrategy) {
    $this->salaryStrategy = $salaryStrategy;
  }

  /**
   * @return float
   */
  public function calculateSalaryPerHour(): float {
    return $this->salaryStrategy->calculate($this->salaryPerHour);
  }

  public function calculateSalaryPerMonth(): float {
    return $this->calculateSalaryPerHour()*160;
  }


  /**
   * @return string
   */
  public function getFirstname():string {
    return $this->firstname;
  }

  /**
   * @param string $firstname
   * @return Employee
   */
  public function setFirstname(string $firstname):Employee {
    $this->firstname = $firstname;
    return $this;
  }

  /**
   * @return string
   */
  public function getLastname():string {
    return $this->lastname;
  }

  /**
   * @param string $lastname
   * @return Employee
   */
  public function setLastname(string $lastname):Employee {
    $this->lastname = $lastname;
    return $this;
  }

  /**
   * @return float
   */
  public function getSalaryPerHour(): float {
    return $this->salaryPerHour;
  }

  /**
   * @param float $salaryPerHour
   */
  public function setSalaryPerHour(float $salaryPerHour) {
    $this->salaryPerHour = $salaryPerHour;
  }




}