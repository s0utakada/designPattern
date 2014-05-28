<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/28
     * Time: 14:55
     */

    namespace Decorator;


    require_once 'Text.php';



    /**
     * Class PlainText
     *
     * @package Decorator
     */
    class PlainText implements Text {


        /**
         * @var null
         */
        private $textString = NULL;

        /**
         * @return mixed
         */
        public function getText() {

            return $this->textString;
        }

        /**
         * @param $str
         *
         * @return mixed
         */
        public function setText($str) {

            $this->textString = $str;
        }

    } 