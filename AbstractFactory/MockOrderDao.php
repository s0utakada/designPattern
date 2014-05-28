<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 13:27
     */

    namespace AbstractFactory;


    require_once 'OrderDao.php';
    require_once 'Order.php';



    /**
     * Class MockOrderDao
     *
     * @package AbstractFactory
     */
    class MockOrderDao implements OrderDao {


        /**
         * @param $order_id
         *
         * @return mixed
         */
        public function findById($order_id) {

            $order = new Order('999');
            $order->addItem(new Item('99', 'ダミー商品'));
            $order->addItem(new Item('99', 'ダミー商品'));
            $order->addItem(new Item('98', 'テスト商品'));

            return $order;
        }

    } 