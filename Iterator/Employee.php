<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/14
     * Time: 10:32
     */

    namespace Iterator;


    /**
     * Class Employee
     *
     * @package iterator
     */
    class Employee {


        /**
         * @var
         */
        private $name;
        /**
         * @var
         */
        private $age;
        /**
         * @var
         */
        private $job;

        /**
         * @param $name
         * @param $age
         * @param $job
         */
        public function __construct($name, $age, $job) {

            $this->name = $name;
            $this->age  = $age;
            $this->job  = $job;
        }

        /**
         * @return mixed
         */
        public function getName() {

            return $this->name;
        }

        /**
         * @return mixed
         */
        public function getAge() {

            return $this->age;
        }

        /**
         * @return mixed
         */
        public function getJob() {

            return $this->job;
        }

    } 