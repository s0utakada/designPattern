<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 16:53
     */

    namespace Bridge;


    require_once 'DataSource.php';



    /**
     * Class Listing
     *
     * @package Bridge
     */
    class Listing {


        /**
         * @var
         */
        private $data_source;

        /**
         * @param $data_source
         */
        function __construct($data_source) {

            $this->data_source = $data_source;
        }

        /**
         *
         */
        function open() {

            $this->data_source->open();
        }

        /**
         * @return mixed
         */
        function read() {

            return $this->data_source->read();
        }

        /**
         *
         */
        function close() {

            $this->data_source->close();
        }

    } 