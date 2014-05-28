<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 13:05
     */

    namespace AbstractFactory;


    /**
     * Interface OrderDao
     *
     * @package AbstractFactory
     */
    interface OrderDao {


        /**
         * @param $order_id
         *
         * @return mixed
         */
        public function findById($order_id);

    } 