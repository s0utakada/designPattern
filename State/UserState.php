<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/03
     * Time: 9:41
     */

    namespace State;


    /**
     * Interface UserState
     *
     * @package State
     */
    interface UserState {


        /**
         * @return mixed
         */
        public function isAuthenticated();

        /**
         * @return mixed
         */
        public function nextState();

        /**
         * @return mixed
         */
        public function getMenu();

    } 