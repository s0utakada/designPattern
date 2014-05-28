<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/28
     * Time: 15:11
     */

    namespace Decorator;


    require_once 'TextDecorator.php';



    /**
     * Class DoubleByteText
     *
     * @package Decorator
     */
    class DoubleByteText extends TextDecorator {


        /**
         * @param Text $target
         */
        public function  __construct(Text $target) {

            parent::__construct($target);
        }

        /**
         * @return mixed|string
         */
        public function getText() {

            $str = parent::getText();
            $str = mb_convert_kana($str, "RANSKV", "UTF-8");

            return $str;
        }

    } 