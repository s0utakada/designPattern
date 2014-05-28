<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 12:38
     */

    namespace AbstractFactory;


    require_once 'DaoFactory.php';
    require_once 'DbItemDao.php';
    require_once 'DbOrderDao.php';



    /**
     * Class DbFactory
     *
     * @package AbstractFactory
     */
    class DbFactory implements DaoFactory {


        /**
         * @return mixed
         */
        public function createItemDao() {

            return New DbItemDao();
        }

        /**
         * @return mixed
         */
        public function createOrderDao() {

            return new DbOrderDao($this->createItemDao());
        }

    } 