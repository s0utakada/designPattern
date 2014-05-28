<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/15
     * Time: 15:19
     */

    namespace Chain;


    require_once 'ValidationHandler.php';



    /**
     * Class NumberValidationHandler
     *
     * @package Chain
     */
    class NumberValidationHandler extends ValidationHandler {


        /**
         * @param $input
         *
         * @return bool
         */
        protected function execValidation($input) {

            return (preg_match('/^[0-9]*$/', $input) > 0);
        }

        /**
         * @return string
         */
        protected function getErrorMessage() {

            return '半角数字で入力してください';
        }

    } 