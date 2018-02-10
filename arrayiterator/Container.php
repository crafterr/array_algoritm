<?php
namespace crafter\ArrayIterator;

class Container extends \SplQueue
{

    public function insert(Item $item) {
        $this->enqueue($item);
        return $item->getData();
    }

    public function remove() {
        return $this->dequeue();
    }
}