<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 13:32
     */

    namespace AbstractFactory;


    /**
     * Class Order
     *
     * @package AbstractFactory
     */
    class Order {


        /**
         * @var
         */
        private $id;
        /**
         * @var
         */
        private $items;

        /**
         * @param $id
         */
        function __construct($id) {

            $this->id    = $id;
            $this->items = [];
        }

        /**
         * @param Item $item
         */
        public function addItem(Item $item) {

            $id = $item->getId();
            if(!array_key_exists($id, $this->items)) {
                $this->items[$id]['object'] = $item;
                $this->items[$id]['amount'] = 0;
            }
            $this->items[$id]['amount']++;
        }

        /**
         * @return mixed
         */
        public function getItems() {

            return $this->items;
        }

        /**
         * @return mixed
         */
        public function getId() {

            return $this->id;
        }
        
    } 