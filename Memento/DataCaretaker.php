<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/30
     * Time: 12:54
     */

    namespace Memento;


    /**
     * Class DataCaretaker
     *
     * @package Memento
     */
    /**
     * Class DataCaretaker
     *
     * @package Memento
     */
    class DataCaretaker {


        /**
         *
         */
        public function __construct() {

            if(!isset($_SESSION)) {
                session_start();
            }

        }

        /**
         * @param DataSnapshot $ss
         */
        public function setSnapshot($ss) {

            $this->snapshot       = $ss;
            $_SESSION['snapshot'] = $this->snapshot;
        }

        /**
         * @return null
         */
        public function getSnapshot() {

            return (isset($_SESSION['snapshot']) ? $_SESSION['snapshot'] : NULL);
        }

    } 