<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Item.php';
require_once 'Container.php';

use crafter\ArrayIterator\Item;
use crafter\ArrayIterator\Container;

$container = new Container();
echo $container->insert(new Item('Adam'));
echo $container->insert(new Item('Marek'));
echo $container->insert(new Item('Grzesiek'));
echo $container->insert(new Item('Kornad'));

dump($container);


$container->remove();

$container->remove();

dump($container);

for ($container->rewind(); $container->valid(); $container->next()) {
    dump($container->current()->getData());
}

//dump($container);
