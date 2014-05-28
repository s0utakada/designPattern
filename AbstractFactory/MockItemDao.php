<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 13:23
     */

    namespace AbstractFactory;


    require_once 'ItemDao.php';
    require_once 'Item.php';



    /**
     * Class MockItemDao
     *
     * @package AbstractFactory
     */
    class MockItemDao implements ItemDao {


        /**
         * @param $item_id
         *
         * @return mixed
         */
        public function findById($item_id) {

            $item = new Item('99', 'ダミー商品');

            return $item;
        }

    } 