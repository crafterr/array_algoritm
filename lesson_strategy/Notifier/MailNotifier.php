<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 22/04/2019
 * Time: 08:46
 */

namespace crafter\lesson_strategy\Notifier;


class MailNotifier extends Notifier {

  function inform($message) {
    print "powiadomienie w trybie MAIL: {$message}\n";
  }

}