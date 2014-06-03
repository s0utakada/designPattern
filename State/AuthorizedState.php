<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/03
     * Time: 9:42
     */

    namespace State;


    require_once 'UserState.php';
    require_once 'UnauthorizedState.php';



    class AuthorizedState implements UserState {


        private static $singletion = NULL;

        function __construct() {
        }

        public static function getInstance() {

            if(self::$singletion == NULL) {
                self::$singletion = new AuthorizedState();
            }

            return self::$singletion;
        }

        /**
         * @return mixed
         */
        public function isAuthenticated() {

            return TRUE;
        }

        /**
         * @return mixed
         */
        public function nextState() {

            return UnauthorizedState::getInstance();
        }

        /**
         * @return mixed
         */
        public function getMenu() {

            $menu = '<a href="?mode=inc">Count Up</a> | <a href="?mode=reset">Reset</a> | <a href="?mode=state">LogOut</a>';

            return $menu;
        }

    } 