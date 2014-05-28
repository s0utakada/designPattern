<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 17:30
     */

    namespace Builder;


    class News {


        private $title;
        private $url;
        private $target_date;
        
        function __construct($title, $url, $target_date) {

            $this->title       = $title;
            $this->url         = $url;
            $this->target_date = $target_date;
        }

        /**
         * @return mixed
         */
        public function getTitle() {

            return $this->title;
        }

        /**
         * @return mixed
         */
        public function getUrl() {

            return $this->url;
        }

        /**
         * @return mixed
         */
        public function getDate() {

            return $this->target_date;
        }

    } 