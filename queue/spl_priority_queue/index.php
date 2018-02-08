<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH . 'vendor/autoload.php';
class MyPriorityQueue extends SplPriorityQueue
{
    public function compare($priority1, $priority2)
    {
        return $priority1 <=> $priority2;
    }
}

$agents = new MyPriorityQueue();
$agents->insert("Fred", 1);
$agents->insert("John", 2);
$agents->insert("Keith", 3);
$agents->insert("Adiyan", 4);
$agents->insert("Mikhael", 2);

//mode of extraction
$agents->setExtractFlags(MyPriorityQueue::EXTR_BOTH);

//Go to TOP
dump($agents->top());

$agents->extract(); //extract Adiyan
$agents->extract(); //extract Keith

//for ($agents->rewind(); $agents->valid(); $agents->next()) {
  //  echo $agents->current();
//}

while ($agents->valid()) {
    $current = $agents->current();
    echo $current['data'] . "\n";
    $agents->next();
}
dump($agents);

