<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/02
     * Time: 16:51
     */

    namespace Proxy;


    /**
     * Class Item
     *
     * @package Proxy
     */
    class Item {


        /**
         * @var
         */
        private $id;
        /**
         * @var
         */
        private $name;

        /**
         * @param $id
         * @param $name
         */
        function __construct($id, $name) {

            $this->id   = $id;
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getId() {

            return $this->id;
        }

        /**
         * @return mixed
         */
        public function getName() {

            return $this->name;
        }
        
        

    } 