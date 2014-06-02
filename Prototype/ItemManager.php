<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/02
     * Time: 13:48
     */

    namespace Prototype;


    require_once 'ItemPrototype.php';



    /**
     * Class ItemManager
     *
     * @package Prototype
     */
    class ItemManager {


        /**
         * @var ItemPrototype[]
         */
        private $items;

        /**
         * 
         */
        function __construct() {

            $this->items = [];
        }

        /**
         * @param ItemPrototype $item
         */
        public function registItem(ItemPrototype $item) {

            $this->items[$item->getCode()] = $item;

        }

        /**
         * @param $item_code
         *
         * @return ItemPrototype
         * @throws \Exception
         */
        public function create($item_code) {

            if(!array_key_exists($item_code, $this->items)) {
                throw new \Exception('item_code ['.$item_code.'] not exists !');
            }
            $cloned_item = $this->items[$item_code]->newInstance();

            return $cloned_item;
        }

    } 