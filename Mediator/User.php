<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/30
     * Time: 11:38
     */

    namespace Mediator;


    require_once 'Chatroom.php';



    /**
     * Class User
     *
     * @package Mediator
     */
    class User {


        /**
         * @var Chatroom
         */
        private $chatroom;
        /**
         * @var String
         */
        private $name;

        /**
         * @param String $name
         */
        function __construct($name) {

            $this->name = $name;
        }

        /**
         * @return String
         */
        public function getName() {

            return $this->name;
        }

        /**
         * @return Chatroom
         */
        public function getChatroom() {

            return $this->chatroom;
        }

        /**
         * @param Chatroom $val
         */
        public function setChatroom(Chatroom $val) {

            $this->chatroom = $val;
        }

        /**
         * @param String $to
         * @param String $msg
         */
        public function sendMessage($to, $msg) {

            $this->chatroom->sendMessage($this->name, $to, $msg);
        }

        /**
         * @param String $frm
         * @param String $msg
         */
        public function receiveMessage($frm, $msg) {

            printf('<font color="008800">%sさんから%sさんへ</font> : %s<hr>', $frm, $this->getName(), $msg);
        }

    } 