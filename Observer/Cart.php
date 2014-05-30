<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/30
     * Time: 15:20
     */

    namespace Observer;


    /**
     * Class Cart
     *
     * @package Observer
     */
    class Cart {


        /**
         * @var string[]
         */
        private $items;

        /**
         * @var CartListener[]
         */
        private $listners;

        /**
         *
         */
        public function __construct() {

            $this->items    = [];
            $this->listners = [];
        }

        /**
         * @param string $item_cd
         */
        public function addItem($item_cd) {

            $this->items[$item_cd] = (isset($this->items[$item_cd]) ? ++$this->items[$item_cd] : 1);
            $this->notify();
        }

        /**
         * @param string $item_cd
         */
        public function removeItem($item_cd) {

            $this->items[$item_cd] = (isset($this->items[$item_cd]) ? --$this->items[$item_cd] : 0);
            if($this->items[$item_cd] <= 0) {
                unset($this->items[$item_cd]);
            }
            $this->notify();
        }

        /**
         * @return string[]
         */
        public function getItems() {

            return $this->items;
        }

        /**
         * @param string $item_cd
         *
         * @return bool
         */
        public function hasItem($item_cd) {

            return array_key_exists($item_cd, $this->items);
        }

        /**
         * @param CartListener $listener
         */
        public function addListener(CartListener $listener) {

            $this->listners[get_class($listener)] = $listener;
        }

        /**
         * @param CartListener $listener
         */
        public function removeLister(CartListener $listener) {

            unset($this->listners[get_class($listener)]);
        }

        /**
         *
         */
        public function notify() {

            foreach($this->listners as $listener) {
                $listener->update($this);
            }

        }

    } 