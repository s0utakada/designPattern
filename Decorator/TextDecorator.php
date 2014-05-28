<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/28
     * Time: 14:59
     */

    namespace Decorator;


    require_once 'Text.php';



    /**
     * Class TextDecorator
     *
     * @package Decorator
     */
    abstract class TextDecorator implements Text {


        /**
         * @var Text
         */
        private $text;

        /**
         * @param Text $target
         */
        public function __construct(Text $target) {

            $this->text = $target;
        }

        /**
         * @return mixed
         */
        public function getText() {

            return $this->text->getText();
        }

        /**
         * @param $str
         *
         * @return mixed
         */
        public function setText($str) {

            $this->text->setText($str);
        }

    } 