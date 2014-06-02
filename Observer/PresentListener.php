<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/30
     * Time: 15:33
     */

    namespace Observer;


    require_once 'CartListener.php';



    /**
     * Class PresentListener
     *
     * @package Observer
     */
    class PresentListener implements CartListener {


        /**
         * @var string
         */
        private static $PRESENT_TARGET_ITEM = '30:Cookie Set';
        /**
         * @var string
         */
        private static $PRESENT_ITEM = '99:Present';

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

            if($cart->hasItem(self::$PRESENT_TARGET_ITEM) && !$cart->hasItem(self::$PRESENT_ITEM)) {
                $cart->addItem(self::$PRESENT_ITEM);
            }

            if(!$cart->hasItem(self::$PRESENT_TARGET_ITEM) && $cart->hasItem(self::$PRESENT_ITEM)) {
                $cart->removeItem(self::$PRESENT_ITEM);
            }
        }

    } 