<?php

    class Queue {

        private $elements;

        function __construct() {
            $this->elements = [];
        }

        function enqueue($val) {
            $this->elements[] = $val;
        }

        function dequeue() {
            $value = $this->elements[0];
            unset($this->elements[0]);
            $this->elements = array_values($this->elements);
            return $value;
        }

    }

    $queue = new Queue();

    $queue->enqueue(8);
    $queue->enqueue(3);
    $queue->enqueue(6);
    $queue->enqueue(1);

    echo $queue->dequeue();
    echo $queue->dequeue();
    echo $queue->dequeue();
    echo $queue->dequeue();
    
?>
