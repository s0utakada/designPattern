<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 10:33
     */

    namespace Iterator;


    require_once 'Employee.php';



    /**
     * Class Employees
     *
     * @package iterator
     */
    class Employees implements \IteratorAggregate {


        /**
         * @var \ArrayObject
         */
        private $employees;

        /**
         *
         */
        public function __construct() {

            $this->employees = new \ArrayObject();
        }

        /**
         * @param Employee $employee
         */
        public function add(Employee $employee) {

            $this->employees[] = $employee;
        }

        /**
         * @return \ArrayIterator
         */
        public function getIterator() {

            return $this->employees->getIterator();
        }

    } 