<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/30
     * Time: 12:32
     */

    namespace Memento;


    /**
     * Class DataSnapshot
     *
     * @package Memento
     */
    class DataSnapshot {


        /**
         * @var String
         */
        private $comment;

        protected function __construct($comment) {

            $this->comment = $comment;
        }

        /**
         * @return String
         */
        public function getComment() {

            return $this->comment;
        }
        
        

    } 