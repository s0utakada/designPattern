<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/15
     * Time: 15:17
     */

    namespace Chain;


    require_once 'ValidationHandler.php';



    /**
     * Class AlphabetValidationHandler
     *
     * @package Chain
     */
    class AlphabetValidationHandler extends ValidationHandler {


        /**
         * @param $input
         *
         * @return bool
         */
        protected function execValidation($input) {

            return preg_match('/^[a-z]*$/i', $input);
        }

        /**
         * @return string
         */
        protected function getErrorMessage() {

            return '半角英字で入力してください';
        }

    } 