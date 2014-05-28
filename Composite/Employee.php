<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/15
     * Time: 17:32
     */

    namespace Composite;


    require_once 'OrganizationEntry.php';



    /**
     * Class Employee
     *
     * @package composite
     */
    class Employee extends OrganizationEntry {


        /**
         * @param string $code
         * @param string $name
         */
        function __construct($code, $name) {

            parent::__construct($code, $name);
        }

        /**
         * @param OrganizationEntry $entry
         */
        public function add(OrganizationEntry $entry) {

            throw new \Exception('method not allowed');
        }

    } 