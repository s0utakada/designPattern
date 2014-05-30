<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/30
     * Time: 11:44
     */

    namespace Mediator;


    require_once 'User.php';



    /**
     * Class Chatroom
     *
     * @package Mediator
     */
    class Chatroom {


        /**
         * @var User[]
         */
        private $users = [];

        /**
         * @param User $usr
         */
        public function login(User $usr) {

            $usr->setChatroom($this);
            if(!array_key_exists($usr->getName(), $this->users)) {
                $this->users[$usr->getName()] = $usr;
                printf('<font color="#0000dd">%sさんが入室しました</font><hr>', $usr->getName());
            }
        }

        /**
         * @param String $frm
         * @param String $to
         * @param String $msg
         */
        public function sendMessage($frm, $to, $msg) {

            if(array_key_exists($to, $this->users)) {
                $this->users[$to]->receiveMessage($frm, $msg);
            } else {
                printf('<font color="#dd0000">%sさんは入室していません</font><hr>', $to);
            }
        }

    } 