<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 13:03
     */

    namespace AbstractFactory;


    require_once 'DaoFactory.php';
    require_once 'MockItemDao.php';
    require_once 'MockOrderDao.php';



    /**
     * Class MockFactory
     *
     * @package AbstractFactory
     */
    class MockFactory implements DaoFactory {


        /**
         * @return mixed
         */
        public function createItemDao() {

            return new MockItemDao();
        }

        /**
         * @return mixed
         */
        public function createOrderDao() {

            return new MockOrderDao();
        }

    } 