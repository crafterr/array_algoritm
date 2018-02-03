<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Item
{
    protected $_key = '';
    protected $_next = NULL;

    public function __construct($key)
    {
        $this->_key = $key;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->_key;
    }

    /**
     * @param string $key
     */
    public function setKey(string $key)
    {
        $this->_key = $key;
    }

    /**
     * @return null
     */
    public function getNext()
    {
        return $this->_next;
    }

    /**
     * @param null $next
     */
    public function setNext($next)
    {
        $this->_next = $next;
    }

    public function __toString()
    {
        return $this->_key . "\n";
    }

}

class Linked_List
{
    protected $_firtNode = null;
    protected $_current = null;

    public function insert(Item $item)
    {
        if ($this->_firtNode === NULL) {
            $this->_firtNode = $item;
            $this->_current = $item;
            return;
        }

        $this->_current->setNext($item);
        $this->_current = $item;
    }

    public function __toString()
    {
        $current = $this->_firtNode;
        $output = '';

        while ($current) {
            $output .= $current->getKey() . "\n";
            $current = $current->getNext();
        }

        return $output;
    }
}

/**
 * Test with linkedlist
 */
$startMemory = memory_get_usage();
echo 'Poczatkowa wartosc: '.$startMemory.' bytes<br />';
$n = 10000;
$a = new Linked_List();
for ($i = 0; $i < $n; $i++) {
    $a->insert(new Item($i));
}
$endMemory = memory_get_usage();
echo 'Koncowa wartość: '.$endMemory.' bytes<br />';
$memoryConsumed = ($endMemory - $startMemory) / (1024*1024);
$memoryConsumed = ceil($memoryConsumed);
echo $memoryConsumed .' MB zajmuje tablica od 1..'.$n;
echo '<br>';

echo 'Każdy element tablicy jest zaalokowane :'.round(($endMemory - $startMemory)/100000).' bytes';
dump($a);