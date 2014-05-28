<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 12:37
     */

    namespace AbstractFactory;


    /**
     * Interface DaoFactory
     *
     * @package AbstractFactory
     */
    interface DaoFactory {


        /**
         * @return mixed
         */
        public function createItemDao();

        /**
         * @return mixed
         */
        public function createOrderDao();
    } 