<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/29
     * Time: 12:39
     */

    namespace Interpreter;


    /**
     * Interface Command
     *
     * @package Interpreter
     */
    interface Command {


        /**
         * @param Context $context
         *
         * @return mixed
         */
        public function execute(Context $context);

    } 