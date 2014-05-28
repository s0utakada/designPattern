<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 16:56
     */

    namespace Bridge;


    require_once 'Listing.php';



    /**
     * Class ExtendedListing
     *
     * @package Bridge
     */
    class ExtendedListing extends Listing {


        /**
         * @param $data_source
         */
        function __construct($data_source) {

            parent::__construct($data_source);
        }

        /**
         * @return string
         */
        function  readWithEncode() {

            return htmlspecialchars($this->read(), ENT_QUOTES, mb_internal_encoding());
        }

    } 