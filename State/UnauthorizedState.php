<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/03
     * Time: 9:48
     */

    namespace State;


    require_once 'UserState.php';
    require_once 'AuthorizedState.php';



    class UnauthorizedState implements UserState {


        private static $singleton = NULL;

        function __construct() {
        }

        public static function getInstance() {

            if(self::$singleton == NULL) {
                self::$singleton = new UnauthorizedState();
            }

            return self::$singleton;
        }

        /**
         * @return mixed
         */
        public function isAuthenticated() {

            return FALSE;

        }

        /**
         * @return mixed
         */
        public function nextState() {
            return AuthorizedState::getInstance();
        }

        /**
         * @return mixed
         */

        public function getMenu() {
            $menu = '<a href="?mode=state">LogIn</a>';
            return $menu;
        }

    } 