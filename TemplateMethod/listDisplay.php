<?php
    require_once 'abstractClass.php';



    /**
     * Class listDisplay
     */
    class listDisplay extends abstractDisplay {


        /**
         * ヘッダ表示
         *
         * @return mixed
         */
        protected function displayHeader() {
            echo '<dl>';
        }

        /**
         * ボディ表示
         *
         * @return mixed
         */
        protected function displayBody() {

            foreach($this->getData() as $key => $value) {
                echo '<dt>Item '.$key.'<dt>';
                echo '<dd>'.$value.'</dd>';
            }

        }

        /**
         * フッタ表示
         *
         * @return mixed
         */
        protected function displayFooter() {
            echo '</dl>';
        }

    }
?>