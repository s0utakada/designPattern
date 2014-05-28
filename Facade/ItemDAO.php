<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/13
     * Time: 9:16
     */

    namespace Facade;

    require_once 'OrderItem.php';

    class ItemDAO {

        private static $instance;
        private $items;
        
        private function __construct() {
            
            $fp = fopen('item_data.txt', 'r');
            
            $header = fgets($fp, 4096);
            
            $this->items = [];
            while ($buffer = fgets($fp, 4096)) {
                $item_id = trim(substr($buffer, 0, 10));
                $item_name = trim(substr($buffer, 10, 20));
                $item_price = trim(substr($buffer, 30));
                
                $item = new Item($item_id, $item_name, $item_price);
                $this->items[$item->getId()] = $item;
            }
            
            fclose($fp);
            
        }
        
        public static function getInstance() {
            
            if(!isset(self::$instance)) {
                self::$instance = new ItemDAO();
            }
            return self::$instance;
        }

        public function findById($item_id) {
            
            if(array_key_exists($item_id, $this->items)) {
                return $this->items[$item_id];
            } else {
                return null;
            }
        }

        public function setAside(OrderItem $order_item) {

            echo $order_item->getItem()->getName().'の引当を行いました。<br>';
        }
        
    } 