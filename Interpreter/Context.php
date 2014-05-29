<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/29
     * Time: 16:27
     */

    namespace Interpreter;


    /**
     * Class Context
     *
     * @package Interpreter
     */
    class Context {


        /**
         * @var String[]
         */
        private $commands;
        /**
         * @var int
         */
        private $current_index = 0;
        /**
         * @var int
         */
        private $max_index = 0;

        /**
         * @param $command
         */
        public function __construct($command) {

            $this->commands  = explode(' ', trim($command));
            $this->max_index = count($this->commands);
        }

        /**
         * @return $this
         */
        public function next() {

            $this->current_index++;

            return $this;
        }

        /**
         * @return null|string
         */
        public function getCurrentCommand() {

            if(!array_key_exists($this->current_index, $this->commands)) {
                return NULL;
            }

            return trim($this->commands[$this->current_index]);
        }

    } 