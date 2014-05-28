<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/13
     * Time: 9:38
     */

    namespace Facade;

    require_once 'Order.php';
    require_once 'ItemDAO.php';
    require_once 'OrderDAO.php';

    class OrderManager {
        
        public static function order(Order $order) {
            
            $item_dao = ItemDAO::getInstance();
            foreach($order->getItems() as $order_item) {
                $item_dao->setAside($order_item);
            }
            
            OrderDAO::createOrder($order);

        }


    } 