<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 22/04/2019
 * Time: 08:47
 */

namespace crafter\lesson_strategy\Notifier;


class TextNotifier extends Notifier {

  function inform($message) {
    print "powiadomienie w trybie TEXT: {$message}\n";
  }

}