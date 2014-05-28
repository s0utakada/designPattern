<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 16:47
     */

    namespace Bridge;


    /**
     * Interface DataSource
     *
     * @package Bridge
     */
    interface DataSource {


        /**
         * @return mixed
         */
        public function open();

        /**
         * @return mixed
         */
        public function read();

        /**
         * @return mixed
         */
        public function close();

    } 