<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/02
     * Time: 16:58
     */

    namespace Proxy;

    require_once 'ItemDao.php';
    require_once 'Item.php';

    class MockItemDao implements ItemDao {


        /**
         * @param $item_id
         *
         * @return mixed
         */
        public function findById($item_id) {
            $item = new Item($item_id, 'dummy');
            return $item;
        }

    } 