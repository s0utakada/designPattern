<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/28
     * Time: 15:03
     */

    namespace Decorator;


    require_once 'TextDecorator.php';



    /**
     * Class UpperCaseText
     *
     * @package Decorator
     */
    class UpperCaseText extends TextDecorator {


        /**
         * @param Text $target
         */
        public function __construct(Text $target) {

            parent::__construct($target);

        }

        /**
         * @return mixed
         */
        public function getText() {

            $str = parent::getText();
            $str = strtoupper($str);

            return $str;
        }

    } 