<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/15
     * Time: 15:25
     */

    namespace Chain;


    require_once 'ValidationHandler.php';



    /**
     * Class MaxLengthValidationHandler
     *
     * @package Chain
     */
    class MaxLengthValidationHandler extends ValidationHandler {


        /**
         * @var
         */
        private $max_length;

        /**
         * @param $max_length
         */
        function __construct($max_length = 10) {

            parent::__construct();
            if(preg_match('/^[0-9]{,2}$/', $max_length)) {
                throw new \RuntimeException('max length is invalid (-0-99) !');
            }
            $this->max_length = (int)$max_length;
        }

        /**
         * @param $input
         *
         * @return bool
         */
        protected function execValidation($input) {

            return (strlen($input) <= $this->max_length);
        }

        /**
         * @return string
         */
        protected function getErrorMessage() {

            return $this->max_length.'バイト以内で入力してください';
        }

    } 