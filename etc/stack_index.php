<?php

    class Stack {

        private $elements = [];

        function __construct() {

            $this->elements = [];

        }

        function push($val) {
            $this->elements[] = $val;
        }

        function pop() {
            $return =  $this->elements[count($this->elements) -1];
            unset($this->elements[count($this->elements) -1]);
            return $return;
        }

    }

    $stack = new Stack();

    $stack->push(8);
    $stack->push(3);
    $stack->push(1);
    $stack->push(6);

    echo $stack->pop();
    echo $stack->pop();
    echo $stack->pop();
    echo $stack->pop();

?>
