<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/03
     * Time: 9:34
     */

    namespace State;

    require_once 'UnauthorizedState.php';

    /**
     * Class User
     *
     * @package State
     */
    class User {


        /**
         * @var
         */
        private $name;
        /**
         * @var
         */
        private $state;
        /**
         * @var int
         */
        private $count = 0;

        /**
         * @param $name
         */
        function __construct($name) {

            $this->name = $name;
            
            $this->state = UnauthorizedState::getInstance();
            $this->resetCount();
        }

        /**
         *
         */
        public function switchState() {
            echo '状態遷移：'.get_class($this->state).'→';
            $this->state = $this->state->nextState();
            echo get_class($this->state).'<br>';
            $this->resetCount();
        }

        /**
         * @return mixed
         */
        public function isAuthenticated() {
            return $this->state->isAuthenticated();
        }

        /**
         * @return mixed
         */
        public function getMenu() {
            return $this->state->getMenu();
        }

        /**
         * @return mixed
         */
        public function getUserName() {
            return $this->name;
        }

        /**
         * @return int
         */
        public function getCount() {
            return $this->count;
        }

        /**
         *
         */
        public function incrementCount() {
            $this->count++;
        }

        /**
         *
         */
        public function resetCount() {
            $this->count = 0;
        }

    } 