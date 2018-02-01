<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH.'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);


/**
 * Class Node
 * Represetant one node
 */
class Node
{
    public $data = NULL;

    public $next = NULL;



    public function __construct(string $data = NULL)
    {
        $this->data = $data;
    }
}

class CircularLinkedList
{
    private $_firstNode = NULL;
    private $_totalNode = 0;

    public function insertAtEnd(string $data = NULL)
    {
        $newNode = new Node($data);

        if ($this->_firstNode === NULL)
        {
            $this->_firstNode = &$newNode;
        }
        else
        {
            $currentNode = $this->_firstNode;
            while ($currentNode->next !== $this->_firstNode)
            {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }

        $newNode->next = $this->_firstNode;
        $this->_totalNode++;
        return true;

    }

    public function display() {
        echo "Total book titles: " . $this->_totalNode . "\n";
        $currentNode = $this->_firstNode;
        while ($currentNode->next !== $this->_firstNode) {
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }

        if ($currentNode) {
            echo $currentNode->data . "\n";
        }
    }
}

$book = new CircularLinkedList();
$book->insertAtEnd("Adam");
$book->insertAtEnd("Grzesiek");
$book->insertAtEnd("Maciek");

dump($book);