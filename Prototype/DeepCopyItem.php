<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/02
     * Time: 13:43
     */

    namespace Prototype;


    require_once 'ItemPrototype.php';



    /**
     * Class DeepCopyItem
     *
     * @package Prototype
     */
    class DeepCopyItem extends ItemPrototype {

        /**
         * @return mixed|void
         */
        protected function __clone() {

            $this->setDetail(clone $this->getDetail());
        }

    } 