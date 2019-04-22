<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 22/04/2019
 * Time: 08:50
 */

namespace crafter\lesson_strategy\Notifier;


use crafter\lesson_strategy\Lesson;

class RegistrationMgr {

  /**
   * @param \crafter\lesson_strategy\Lesson $lesson
   */
  public function register(Lesson $lesson) {
    $notifier = Notifier::getNotifier();
    $notifier->inform("nowe zajęcia: koszt ({$lesson->cost()})");
  }
}