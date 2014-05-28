<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 13:13
     */

    namespace AbstractFactory;


    require_once 'OrderDao.php';
    require_once 'Order.php';



    /**
     * Class DbOrderDao
     *
     * @package AbstractFactory
     */
    class DbOrderDao implements OrderDao {


        /**
         * @var array
         */
        private $orders;

        /**
         * @param ItemDao $item_dao
         */
        function __construct(ItemDao $item_dao) {

            $fp = fopen('order_data.txt', 'r');

            $header = fgets($fp, 4096);

            $this->orders = [];
            while($buf = fgets($fp, 4096)) {
                $order_id = trim(substr($buf, 0, 10));
                $item_ids = trim(substr($buf, 10));

                $order = new Order($order_id);
                foreach(explode(',', $item_ids) as $item_id) {
                    $item = $item_dao->findById($item_id);
                    if(!is_null($item)) {
                        $order->addItem($item);
                    }
                }
                $this->orders[$order->getId()] = $order;

            }

            fclose($fp);
        }

        /**
         * @param $order_id
         *
         * @return mixed
         */
        public function findById($order_id) {

            if(array_key_exists($order_id, $this->orders)) {
                return $this->orders[$order_id];
            } else {
                return NULL;
            }
        }

    } 