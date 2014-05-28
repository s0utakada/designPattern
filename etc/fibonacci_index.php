<?php

    class Fibonacci {

        private $count;
        private $resultArr;

        function __construct() {

            $this->count = 0;
            $this->resultArr[0] = 0;
            $this->resultArr[1] = 1;

        }

        function getCount() {
            return $this->count;
        }

        function get($val) {
            if(!isset($this->resultArr[$val])) {
                $this->count++;
                $this->resultArr[$val] = Fibonacci::get($val - 1) + Fibonacci::get($val - 2);                
            }
            return $this->resultArr[$val];            
        }
    }

    $val = 80;

    $fibo = new Fibonacci();
    $result = $fibo->get($val);
    echo $val.'番目のフィボナッチは'.$fibo->getCount().'回計算が必要で'.$result.'です';

?>