<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/30
     * Time: 12:36
     */

    namespace Memento;


    require_once 'DataSnapshot.php';



    /**
     * Class Data
     *
     * @package Memento
     */
    final class Data extends DataSnapshot {


        /**
         * @var String[]
         */
        private $comment;

        /**
         *
         */
        public function __construct() {

            $this->comment = [];
        }

        /**
         * @return DataSnapshot
         */
        public function takeSnapshot() {

            return new DataSnapshot($this->comment);
        }

        /**
         * @param DataSnapshot $ss
         */
        public function restoreSnapshot(DataSnapshot $ss) {

            $this->comment = $ss->getComment();
        }

        /**
         * @param String $comment
         */
        public function addComment($comment) {

            $this->comment[] = $comment;
        }

        /**
         * @return array|String|\String[]
         */
        public function getComment() {

            return $this->comment;
        }

    } 