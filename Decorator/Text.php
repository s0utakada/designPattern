<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/28
     * Time: 14:54
     */

    namespace Decorator;


    /**
     * Interface Text
     *
     * @package Decorator
     */
    interface Text {


        /**
         * @return mixed
         */
        public function getText();

        /**
         * @param $str
         *
         * @return mixed
         */
        public function setText($str);

    } 