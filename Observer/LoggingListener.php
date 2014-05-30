<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/30
     * Time: 15:37
     */

    namespace Observer;


    require_once 'CartListener.php';



    /**
     * Class LoggingListener
     *
     * @package Observer
     */
    class LoggingListener implements CartListener {


        /**
         *
         */
        function __construct() {
        }

        /**
         * @param Cart $cart
         *
         * @return mixed|void
         */
        public function update(Cart $cart) {

            echo '<pre>';
            var_dump($cart->getItems());
            echo '</pre>';
        }

    } 