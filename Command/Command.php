<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/15
     * Time: 16:22
     */

    namespace Command;


    /**
     * Interface Command
     *
     * @package command
     */
    interface Command {


        /**
         * @return mixed
         */
        public function execute();

    } 