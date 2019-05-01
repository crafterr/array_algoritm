<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH . 'vendor/autoload.php';

class ObjectManager implements Iterator {
  private $objects = [];
  private $position;



  public function addObject(Objects $objects) {
    $this->objects[] = $objects;
  }

  public function current()
  {
    return $this->objects[$this->position];
  }

  public function key()
  {
    return $this->position;
  }

  public function next()
  {
    ++$this->position;
  }

  public function rewind()
  {
    $this->position = 0;
  }

  public function valid()
  {
    return array_key_exists($this->position, $this->objects);
  }

}

class Objects {


  private $name;

  private $items = [];

  public function __construct(string $name) {
    $this->name = $name;
  }

  /**
   * @return mixed
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param mixed $name
   */
  public function setName($name) {
    $this->name = $name;
  }

  public function addItem(Item $item) {
      array_push($this->items,$item);
  }

  public function getItems() {
    return $this->items;
  }




}

class Item {
  private $name;

  public function __construct(string $name) {
    $this->name = $name;
  }

  /**
   * @return mixed
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param mixed $name
   */
  public function setName($name) {
    $this->name = $name;
  }


}

$tree = [
  'objects' => [
    'dom' => [
      'items' => [
        'lazienka',
        'kuchnia',
        'wc'
      ]
    ],
    'hotel' => [
      'items' => [
        'wc',
        'pokoj'
      ]
    ],
    'mieszkanie' => [
      'items' => [
        'pokoj',
        'lazienka'
      ]
    ]
  ]
];

$dom = new Objects('dom');
$dom->addItem(new Item('Lazienka'));
$dom->addItem(new Item('Kuchnia'));
$dom->addItem(new Item('Wc'));

$hotel = new Objects('hotel');
$hotel->addItem(new Item('Wc'));
$hotel->addItem(new Item('Pokoj'));

$mieszkanie = new Objects('mieszkanie');
$mieszkanie->addItem(new Item('Pokoj'));
$mieszkanie->addItem(new Item('Lazienka'));

$manager = new ObjectManager();
$manager->addObject($dom);
$manager->addObject($hotel);
$manager->addObject($mieszkanie);

dump($manager);
/**
 * @var \Objects $object
 * @var \Item $item
 */
foreach ($manager as $object) {
  echo '=>'.$object->getName().'<br />';
  foreach ($object->getItems() as $item) {
    echo ' ->'.$item->getName().'<br />';
  }
}