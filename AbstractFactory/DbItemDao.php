<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 13:06
     */

    namespace AbstractFactory;


    require_once 'ItemDao.php';
    require_once 'Item.php';



    /**
     * Class DbItemDao
     *
     * @package AbstractFactory
     */
    class DbItemDao implements ItemDao {


        /**
         * @var array
         */
        private $items;

        /**
         *
         */
        function __construct() {

            $fp = fopen('item_data.txt', 'r');

            $header = fgets($fp, 4096);

            $this->items = [];
            while($buffer = fgets($fp, 4096)) {
                $item_id   = trim(substr($buffer, 0, 10));
                $item_name = trim(substr($buffer, 10));

                $item                        = new Item($item_id, $item_name);
                $this->items[$item->getId()] = $item;
            }

            fclose($fp);
        }

        /**
         * @param $item_id
         *
         * @return mixed
         */
        public function findById($item_id) {

            if(array_key_exists($item_id, $this->items)) {
                return $this->items[$item_id];
            } else {
                return NULL;
            }
        }

    } 