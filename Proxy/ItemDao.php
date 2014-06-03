<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/02
     * Time: 16:52
     */

    namespace Proxy;


    /**
     * Interface ItemDao
     *
     * @package Proxy
     */
    interface ItemDao {


        /**
         * @param $item_id
         *
         * @return mixed
         */
        public function findById($item_id);

    } 