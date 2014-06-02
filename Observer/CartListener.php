<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/30
     * Time: 15:32
     */

    namespace Observer;


    /**
     * Interface CartListener
     *
     * @package Observer
     */
    interface CartListener {


        /**
         * @param Cart $cart
         *
         * @return mixed
         */
        public function update(Cart $cart);

    } 