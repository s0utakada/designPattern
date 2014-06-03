<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/02
     * Time: 16:53
     */

    namespace Proxy;


    require_once 'ItemDao.php';
    require_once 'Item.php';



    class DbItemDao implements ItemDao {


        /**
         * @param $item_id
         *
         * @return mixed
         */
        public function findById($item_id) {

            $fp = fopen('item_data.txt', 'r');

            $header = fgets($fp, 4096);

            $item = NULL;

            while($buf = fgets($fp, 4096)) {
                $id   = trim(substr($buf, 0, 10));
                $name = trim(substr($buf, 10));

                if($item_id === (int)$id) {
                    $item = new Item($id, $name);
                    break;
                }
            }
            
            fclose($fp);
            
            return $item;

        }

    } 