<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/15
     * Time: 15:10
     */

    namespace Chain;


    /**
     * Class ValidationHandler
     *
     * @package Chain
     */
    abstract class ValidationHandler {


        /**
         * @var
         */
        private $next_handler;

        /**
         *
         */
        public function __construct() {

            $this->next_handler = NULL;
        }

        /**
         * @param ValidationHandler $handler
         *
         * @return ValidationHandler
         */
        public function setHandler(ValidationHandler $handler) {

            $this->next_handler = $handler;

            return $this;
        }

        /**
         * @return ValidationHandler
         */
        public function getNextHandler() {

            return $this->next_handler;
        }

        /**
         * @param $input
         *
         * @return string|bool
         */
        public function validate($input) {

            $result = $this->execValidation($input);
            if(!$result) {
                return $this->getErrorMessage();
            } else if(!is_null($this->getNextHandler())) {
                return $this->getNextHandler()->validate($input);
            } else {
                return TRUE;
            }
        }

        /**
         * @param $input
         *
         * @return mixed
         */
        protected abstract function execValidation($input);

        /**
         * @return mixed
         */
        protected abstract function getErrorMessage();

    } 