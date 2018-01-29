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

class LinkedList
{
    private $_firstNode = NULL;


    private $_totalNode = 0;

    /**
     * Insert string to node
     * @param string|NULL $data
     * @return true
     */
    public function insert(string $data = NULL)
    {
        $newNode = new Node($data);

        if ($this->_firstNode === NULL)
        {
            $this->_firstNode = &$newNode;
        }
        else
        {
            $currentNode = $this->_firstNode;
            while ($currentNode->next !== NULL) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->_totalNode++;
        return true;

    }

    /**
     * Inserting at the first node
     * @param string|NULL $data
     * @return true
     */
    public function insertAtFirst(string $data = NULL)
    {
        $newNode = new Node($data);

        if ($this->_firstNode === NULL)
        {
            $this->_firstNode = &$newNode;
        }
        else
        {
            $currentFirstNode = $this->_firstNode;
            $this->_firstNode = &$newNode;
            $newNode->next = $currentFirstNode;
        }
        $this->_totalNode++;
        return true;
    }

    /**
     * @param string|NULL $data
     * @param null $query
     */
    public function insertBefore(string $data = NULL, $query = NULL)
    {
        $newNode = new Node($data);
        if ($this->_firstNode)
        {
            $previous = NULL;
            $currentNode = $this->_firstNode;
            while ($currentNode !== NULL)
            {
                if ($currentNode->data === $query)
                {
                    $newNode->next = $currentNode;
                    $previous->next = $newNode;
                    $this->_totalNode++;
                    break;
                }

                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }

    }

    /**
     * insertAfter
     * @param string|NULL $data
     * @param null $query
     */
    public function insertAfter(string $data = NULL, $query = NULL)
    {
        $newNode = new Node($data);

        if ($this->_firstNode)
        {
            $nextNode = NULL;
            $currentNode = $this->_firstNode;
            while ($currentNode !== NULL)
            {
                if ($currentNode->data === $query)
                {
                    if($nextNode !== NULL)
                    {
                        $newNode->next = $nextNode;
                    }
                    $currentNode->next = $newNode;
                    $this->_totalNode++;
                    break;
                }

                $nextNode = $currentNode;
                $currentNode = $currentNode->next;
                echo 'weszlo';
            }


        }


    }

    /**
     * Searching for a node
     * @param string|null $data
     * @return bool
     */
    public function search(string $data = null)
    {
        if ($this->_totalNode)
        {
            $currentNode = $this->_firstNode;
            while ($currentNode !== NULL)
            {
                if ($currentNode->data === $data)
                {
                    return $currentNode;
                }
                $currentNode = $currentNode->next;
            }
        }
        return false;
    }

    public function deleteFirst()
    {

        if ($this->_firstNode !== NULL)
        {
            if ($this->_firstNode->next !== NULL)
            {
                $this->_firstNode = $this->_firstNode->next;
            }
            else
            {
                $this->_firstNode = NULL;
            }
            $this->_totalNode--;
            return true;
        }
        return false;
    }





    public function display()
    {
        echo "Total book titles: ".$this->_totalNode.'<br />';
        $currentNode  = $this->_firstNode;
        while ($currentNode !== NULL)
        {
            echo $currentNode->data.' | ';
            $currentNode = $currentNode->next;
        }
    }
}



$BookTitles = new LinkedList();
$BookTitles->insert("1");
$BookTitles->insert("2");
$BookTitles->insert("3");
//$BookTitles->insertAtFirst("First introduction to Algoritm");
//$BookTitles->insert("Adam ma kota");
//$BookTitles->insertBefore("Tej jest before","Introduction to Algorithm");
//$BookTitles->insertAfter("Ten jest after","Adam ma kota");
//$BookTitles->deleteFirst();
//$BookTitles->display();
dump($BookTitles);




