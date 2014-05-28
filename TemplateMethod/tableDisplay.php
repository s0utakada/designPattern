<?php

    require_once 'abstractClass.php';



    /**
     * Class tableDisplay
     */
    class tableDisplay extends abstractDisplay {


        /**
         * ヘッダ表示
         *
         * @return mixed
         */
        protected function displayHeader() {

            echo '<table border ="1">';
            
        }

        /**
         * ボディ表示
         *
         * @return mixed
         */
        protected function displayBody() {

            foreach($this->getData() as $key => $value) {
                echo '<tr>';
                echo '<th>'.$key.'</th>';
                echo '<td>'.$value.'</td>';
                echo '</tr>';
            }

        }

        /**
         * フッタ表示
         *
         * @return mixed
         */
        protected function displayFooter() {
            echo '</tabke>';
        }

    }
    
?>