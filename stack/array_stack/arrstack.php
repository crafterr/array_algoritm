<?php
define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT']. '/' );
require ABSPATH . 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'StackInterface.php';

class Books implements StackInterface
{

    private $limit;

    private $stack;

    public function __construct(int $limit = 20)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    /**
     * Implement push item to array
     * @param string $item
     */
    public function push(string $item)
    {
        if (count($this->stack) < $this->limit)
        {
            array_push($this->stack,$item);
        }
        else
        {
            throw new OverflowException('Stack is already full');
        }
    }

    /**
     * Implement pop to array
     * @return string
     */
    public function pop():string
    {
        if ($this->isEmpty())
        {
            throw new UnderflowException('Stack is unfortunately empty');
        }
        else
        {
            return array_pop($this->stack);
        }
    }

    /**
     * Return end element of stack
     * @return string
     */
    public function top(): string
    {
        return end($this->stack);
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->stack);
    }

}

/**
 * Let's check it out our stack
 */

try
{
    $programmingBook = new Books(10);
    $programmingBook->push('Introduction to PHP7');
    $programmingBook->push('Mastering JavaScript');
    $programmingBook->push('MySQL Workbench tutorial');

    //echo $programmingBook->pop().'<br />';
    echo $programmingBook->top();

    dump($programmingBook);
}
catch (Exception $e)
{
    echo $e->getMessage();
}

