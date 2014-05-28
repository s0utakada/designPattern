<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/15
     * Time: 15:23
     */

    namespace Chain;


    require_once 'ValidationHandler.php';



    /**
     * Class NotNullValidationHandler
     *
     * @package Chain
     */
    class NotNullValidationHandler extends ValidationHandler {


        /**
         * @param $input
         *
         * @return bool
         */
        protected function execValidation($input) {

            return (is_string($input) && $input !== '');
        }

        /**
         * @return string
         */
        protected function getErrorMessage() {

            return '入力されていません';
        }

    } 