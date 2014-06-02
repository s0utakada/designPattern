<?php

    namespace Prototype;


    /**
     * Class ItemPrototype
     *
     * @package Prototype
     */
    abstract class ItemPrototype {


        /**
         * @var String
         */
        private $item_code;
        /**
         * @var String
         */
        private $item_name;
        /**
         * @var String
         */
        private $price;
        /**
         * @var \stdClass
         */
        private $detail;

        /**
         * @param $item_code
         * @param $item_name
         * @param $price
         */
        function __construct($item_code, $item_name, $price) {

            $this->item_code = $item_code;
            $this->item_name = $item_name;
            $this->price     = $price;
        }

        /**
         * @return String
         */
        public function getCode() {

            return $this->item_code;
        }

        /**
         * @return String
         */
        public function getName() {

            return $this->item_name;
        }

        /**
         * @return String
         */
        public function getPrice() {

            return $this->price;
        }

        /**
         * @param \stdClass $detail
         */
        public function setDetail(\stdClass $detail) {

            $this->detail = $detail;
        }

        /**
         * @return \stdClass
         */
        public function getDetail() {

            return $this->detail;
        }

        /**
         *
         */
        public function dumpData() {

            echo '<dl>';
            echo '<dt>'.$this->getName().'</dt>';
            echo '<dd>Item Code : '.$this->getCode().'</dd>';
            echo '<dd>\\'.number_format(floatval($this->getPrice())).'-</dd>';
            echo '<dd>'.$this->detail->comment.'</dd>';
            echo '</dl>';
        }

        /**
         * @return ItemPrototype
         */
        public function newInstance() {

            $new_instance = clone $this;

            return $new_instance;
        }

        /**
         * @return mixed
         */
        protected abstract function __clone();

    } 