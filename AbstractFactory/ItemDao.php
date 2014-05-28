<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 13:05
     */

    namespace AbstractFactory;


    /**
     * Interface ItemDao
     *
     * @package AbstractFactory
     */
    interface ItemDao {


        /**
         * @param $item_id
         *
         * @return mixed
         */
        public function findById($item_id);

    } 