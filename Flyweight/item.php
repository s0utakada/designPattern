<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/28
     * Time: 16:48
     */

    namespace Flyweight;


    /**
     * Class item
     *
     * @package Flyweight
     */
    class Item {


        /**
         * @var String
         */
        private $code;
        /**
         * @var String
         */
        private $name;
        /**
         * @var String
         */
        private $price;

        /**
         * @param $code String
         * @param $name String
         * @param $price String
         */
        function __construct($code, $name, $price) {

            $this->code  = $code;
            $this->name  = $name;
            $this->price = $price;
        }

        /**
         * @return String
         */
        public function getCode() {

            return $this->code;
        }

        /**
         * @return String
         */
        public function getName() {

            return $this->name;
        }

        /**
         * @return String
         */
        public function getPrice() {

            return $this->price;
        }
        
    } 