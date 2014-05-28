<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 13:30
     */

    namespace AbstractFactory;


    /**
     * Class Item
     *
     * @package AbstractFactory
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