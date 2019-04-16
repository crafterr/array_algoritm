<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 15/04/2019
 * Time: 19:39
 */

namespace crafter\lesson_strategy\CostStrategy;


use crafter\lesson_strategy\Lesson;

class TimedCostStrategy extends CostStrategy {

  public function cost(Lesson $lesson): int {
    return ($lesson->getDuration()*5);
  }

  public function chargeType(): string {
    return "stawka godzinowa";
  }

}