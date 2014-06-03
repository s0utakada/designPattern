<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/02
     * Time: 13:46
     */

    namespace Prototype;


    require_once 'ItemPrototype.php';



    /**
     * Class ShallowCopyItem
     *
     * @package Prototype
     */
    class ShallowCopyItem extends ItemPrototype {


        /**
         * @return mixed|void
         */
        protected function __clone() {
        }

    } 