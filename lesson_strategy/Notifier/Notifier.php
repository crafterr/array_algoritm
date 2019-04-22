<?php
namespace crafter\lesson_strategy\Notifier;


abstract class Notifier {

  /**
   * @return \crafter\lesson_strategy\Notifier\Notifier
   */
  public static function getNotifier():Notifier {
      if (rand(1,2) == 1) {
        return new MailNotifier();
      } else {
        return new TextNotifier();
      }
  }

  /**
   * @param $message
   *
   * @return mixed
   */
  abstract function inform($message);

}