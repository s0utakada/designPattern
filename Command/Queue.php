<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/15
     * Time: 16:30
     */

    namespace Command;


    require_once 'Command.php';



    /**
     * Class Queue
     *
     * @package command
     */
    class Queue {


        /**
         * @var Command[]
         */
        private $commands;

        /**
         * @var int
         */
        private $current_index;

        /**
         *
         */
        public function __construct() {

            $this->commands      = [];
            $this->current_index = 0;
        }

        /**
         * @param Command $cmd
         */
        public function addCommand(Command $cmd) {

            $this->commands[] = $cmd;
        }

        /**
         *
         */
        public function run() {

            while(!is_null($com = $this->next())) {
                $com->execute();
            }
        }

        /**
         * @return Command|null
         */
        private function next() {

            if(count($this->commands) === 0 || count($this->commands) <= $this->current_index) {
                return NULL;
            } else {
                return $this->commands[$this->current_index++];
            }
        }

    } 