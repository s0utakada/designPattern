<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 16:48
     */

    namespace Bridge;


    require_once 'DataSource.php';



    /**
     * Class FileDataSource
     *
     * @package Bridge
     */
    class FileDataSource implements DataSource {


        /**
         * @var
         */
        private $source_name;

        /**
         * @var
         */
        private $handler;

        /**
         * @param $source_name
         */
        function __construct($source_name) {

            $this->source_name = $source_name;
        }

        /**
         * @return mixed
         */
        public function open() {

            if(!is_readable($this->source_name)) {
                throw new \Exception('データソースが見つかりません');
            }
            $this->handler = fopen($this->source_name, 'r');
            if(!$this->handler) {
                throw new \Exception('データソースが開けません');
            }
        }

        /**
         * @return mixed
         */
        public function read() {

            $buff = [];
            while(!feof($this->handler)) {
                $buff[] = fgets($this->handler);
            }

            return implode($buff);
        }

        /**
         * @return mixed
         */
        public function close() {

            if(!is_null($this->handler)) {
                fclose($this->handler);
            }
        }

    } 