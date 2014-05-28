<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 10:37
     */

    namespace Iterator;


    require_once 'Employee.php';



    /**
     * Class SalesmanIterator
     *
     * @package iterator
     */
    class SalesmanIterator extends \FilterIterator {


        /**
         * @param \Iterator $iterator
         */
        public function __construct($iterator) {

            parent::__construct($iterator);
        }

        /**
         * @return bool
         */
        public function accept() {

            $employee = $this->current();

            return ($employee->getJob() === 'SALESMAN');
        }

    } 