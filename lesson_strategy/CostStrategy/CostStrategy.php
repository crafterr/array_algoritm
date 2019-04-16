<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 15/04/2019
 * Time: 19:37
 */

namespace crafter\lesson_strategy\CostStrategy;


use crafter\lesson_strategy\Lesson;

abstract class CostStrategy {

  abstract public function cost(Lesson $lesson): int;

  abstract public function chargeType(): string;
}