<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/15
     * Time: 17:27
     */

    namespace Composite;


    require_once 'OrganizationEntry.php';



    /**
     * Class Group
     *
     * @package composite
     */
    class Group extends OrganizationEntry {


        /**
         * @var OrganizationEntry[]
         */
        private $entries;

        /**
         * @param string $code
         * @param string $name
         */
        function __construct($code, $name) {

            parent::__construct($code, $name);
            $this->entries = [];
        }

        /**
         * @param OrganizationEntry $entry
         */
        public function add(OrganizationEntry $entry) {

            array_push($this->entries, $entry);
        }

        /**
         *
         */
        public function dump() {

            parent::dump();
            foreach($this->entries as $entry) {
                $entry->dump();
            }

        }

    } 