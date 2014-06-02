<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/02
     * Time: 17:00
     */

    namespace Proxy;

    require_once 'ItemDao.php';

    /**
     * Class ItemDaoProxy
     *
     * @package Proxy
     */
    class ItemDaoProxy implements ItemDao {


        /**
         * @var ItemDao
         */
        private $dao;
        /**
         * @var
         */
        private $cache;

        /**
         * @param ItemDao $dao
         */
        function __construct(ItemDao $dao) {

            $this->dao   = $dao;
            $this->cache = [];
        }

        /**
         * @param $item_id
         *
         * @return mixed
         */
        public function findById($item_id) {

            if(array_key_exists($item_id, $this->cache)) {
                echo '<font color="#dd0000">Return cache data by proxy</font><br>';

                return $this->cache[$item_id];
            }

            $this->cache[$item_id] = $this->dao->findById($item_id);

            return $this->cache[$item_id];
            
        }

    } 