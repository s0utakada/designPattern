<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/15
     * Time: 17:23
     */

    namespace Composite;


    /**
     * Class OrganizationEntry
     *
     * @package composite
     */
    abstract class OrganizationEntry {


        /**
         * @var string
         */
        private $code;
        /**
         * @var string
         */
        private $name;

        /**
         * @param string $code
         * @param string $name
         */
        function __construct($code, $name) {

            $this->code = $code;
            $this->name = $name;
        }

        /**
         * @return string
         */
        public function getCode() {

            return $this->code;
        }

        /**
         * @return string
         */
        public function getName() {

            return $this->name;
        }

        /**
         * @param OrganizationEntry $entry
         */
        public abstract function add(OrganizationEntry $entry);

        /**
         *
         */
        public function dump() {

            echo $this->code.':'.$this->name."<br>\n";
        }

    } 