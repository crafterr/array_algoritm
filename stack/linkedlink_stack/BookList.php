<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 03/02/2018
 * Time: 22:27
 */
require_once 'StackInterface.php';
require_once 'LinkedList.php';
class BookList implements StackInterface
{
    private $stack;

    public function __construct()
    {
        $this->stack = new LinkedList();
    }

    public function push(string $item)
    {
        $this->stack->insert($item);
    }

    public function pop() : string
    {
        if ($this->isEmpty())
        {
            throw new UnderflowException("Stack is empty");
        }
        else
        {
            $lastItem = $this->top();
            $this->stack->deleteLast();
            return $lastItem;
        }

    }

    public function top() : string
    {
        return $this->stack->getNthNode($this->stack->getSize())->data;
    }

    public function isEmpty() : bool
    {
        return ($this->stack->getSize()==0);
    }



}