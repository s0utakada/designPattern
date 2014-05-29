<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/28
     * Time: 16:50
     */

    namespace Flyweight;


    require_once 'Item.php';



    /**
     * Class ItemFactory
     *
     * @package Flyweight
     */
    class ItemFactory {


        /**
         * @var Item[]
         */
        private $pool;

        /**
         * @var null Item
         */
        private static $instance = NULL;

        /**
         * @param $filename String
         */
        private function __construct($filename) {

            $this->buildPool($filename);
        }

        /**
         * @param $filename
         *
         * @return ItemFactory|null
         */
        public static function getInstance($filename) {

            if(is_null(self::$instance)) {
                self::$instance = new ItemFactory($filename);
            }

            return self::$instance;
        }

        /**
         * @param $code String
         *
         * @return Item|null
         */
        public function getItem($code) {

            if(array_key_exists($code, $this->pool)) {
                return $this->pool[$code];
            } else {
                return NULL;
            }
        }

        /**
         * @param $filename String
         */
        private function buildPool($filename) {

            $this->pool = [];

            $fp = fopen($filename, 'r');
            while($buf = fgets($fp, 4096)) {
                list($i_code, $i_name, $i_price) = explode(",", $buf);
                $this->pool[$i_code] = new Item($i_code, $i_name, $i_price);
            }
            fclose($fp);
        }

    } 