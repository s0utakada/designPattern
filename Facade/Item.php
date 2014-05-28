<?php
    
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/12
     * Time: 10:28
     */

    namespace Facade;

    class Item {

        private $id;
        private $name;
        private $price;

        public function __construct($id, $name, $price) {

            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
        }
        
        public function getId() {

            return $this->id;
        }

        public function getName() {

            return $this->name;
        }

        public function getPrice() {

            return $this->price;
        }

    } 