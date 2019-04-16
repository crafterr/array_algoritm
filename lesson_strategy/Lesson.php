<?php

namespace crafter\lesson_strategy;


use crafter\lesson_strategy\CostStrategy\CostStrategy;

abstract class Lesson {

  /**
   * @var int czas trawania
   */
  private $duration;

  /**
   * @var CostStrategy
   *
   */
  private $costStrategy;

  /**
   * Lesson constructor.
   *
   * @param int $duration
   * @param \crafter\lesson_strategy\CostStrategy\CostStrategy $costStrategy
   */
  public function __construct(int $duration, CostStrategy $costStrategy) {
    $this->duration = $duration;
    $this->costStrategy = $costStrategy;
  }

  /**
   * @return int
   */
  public function cost():int {
    return $this->costStrategy->cost($this);
  }

  /**
   * @return string
   */
  public function chargeType():string {
    return $this->costStrategy->chargeType();
  }

  /**
   * @return int
   */
  public function getDuration():int {
    return $this->duration;
  }
}