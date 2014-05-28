<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/15
     * Time: 16:11
     */

    namespace Command;


    /**
     * Class File
     *
     * @package command
     */
    class File {


        /**
         * @var string
         */
        private $name;

        /**
         * @param $name String
         */
        public function __construct($name) {

            $this->name = $name;
        }

        /**
         * @return string
         */
        public function getName() {

            return $this->name;
        }

        /**
         *
         */
        public function decompress() {

            echo $this->name.'を展開<br>';
        }

        /**
         *
         */
        public function compress() {

            echo $this->name.'を圧縮<br>';
        }

        /**
         *
         */
        public function create() {

            echo $this->name.'を作成<br>';
        }

    } 