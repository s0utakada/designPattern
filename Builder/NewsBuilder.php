<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 17:33
     */

    namespace Builder;


    /**
     * Interface NewsBuilder
     *
     * @package builder
     */
    interface NewsBuilder {


        /**
         * @param $data
         *
         * @return mixed
         */
        public function parse($data);

    } 