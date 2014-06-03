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


        private static $singleton = NULL;

        private function __construct() {
        }

        public static function getInstance() {

            if(self::$singleton === NULL) {
                self::$singleton = new AuthorizedState();
            }

            return self::$singleton;
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

            $menu = '<a href="?mode=inc">Count Up</a> | <a href="?mode=reset">Reset</a> | <a href="?mode=state">Log Out</a>';

            return $menu;
        }

    } 