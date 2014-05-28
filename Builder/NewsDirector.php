<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 17:34
     */

    namespace Builder;


    require_once 'NewsBuilder.php';



    /**
     * Class NewsDirector
     *
     * @package builder
     */
    class NewsDirector {


        /**
         * @var NewsBuilder
         */
        private $builder;
        /**
         * @var
         */
        private $url;

        /**
         * @param NewsBuilder $builder
         * @param             $url
         */
        function __construct(NewsBuilder $builder, $url) {

            $this->builder = $builder;
            $this->url     = $url;
        }

        /**
         * @return mixed
         */
        public function getNews() {

            $news_list = $this->builder->parse($this->url);

            return $news_list;
        }

    } 