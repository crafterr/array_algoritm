<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 10/02/2018
 * Time: 18:14
 */

class CircularQueue implements Queue
{
    private $queue;
    private $limit;
    private $front = 0;
    private $rear = 0;

    public function __construct(int $limit = 0)
    {
        $this->limit = $limit;
        $this->queue = [];
    }

    public function size() {
        if ($this->rear > $this->front)
            return $this->rear - $this->front;
        return $this->limit - $this->front + $this->rear;
    }

    public function isFull() {
        $diff = $this->rear - $this->front;
        if ($diff == -1 || $diff == ($this->limit - 1))
            return true;
        return false;
    }

    public function enqueue(string $item)
    {
        if ($this->isFull()) {
            throw new OverflowException("Queue is Full.");
        } else {
            $this->queue[$this->rear] = $item;
            $this->rear = ($this->rear + 1) % $this->limit;
        }
    }

    public function dequeue() : string
    {
        $item = "";
        if ($this->isEmpty()) {
            throw new UnderflowException("Queue is empty");
        } else {
            $item = $this->queue[$this->front];
            $this->queue[$this->front] = NULL;
            $this->front = ($this->front + 1) % $this->limit;
        }
        return $item;
    }

    public function peek() : string
    {
        return $this->queue[$this->front];
    }

    public function isEmpty() : bool
    {
        return $this->rear == $this->front;
    }

}