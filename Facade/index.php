<?php

    namespace Facade;
    
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/13
     * Time: 9:42
     */

    require_once 'Order.php';
    require_once 'OrderItem.php';
    require_once 'ItemDAO.php';
    require_once 'OrderManager.php';

    $order = new Order();
    $item_dao = ItemDAO::getInstance();

    $order->addItem(new OrderItem($item_dao->findById(1),2));
    $order->addItem(new OrderItem($item_dao->findById(2),1));
    $order->addItem(new OrderItem($item_dao->findById(3),3));

    OrderManager::order($order);