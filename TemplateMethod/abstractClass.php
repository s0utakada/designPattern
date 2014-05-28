<?php



    /**
     * Class abstractDisplay
     * AbstractClassに相当する
     */
    abstract class abstractDisplay {
        
        private $data;

        /**
         * 初期化
         * @param $data
         */
        public function __construct($data) {
            
            if(!is_array($data)){
                $data = [$data];
            }
            $this->data = $data;

        }

        /**
         * 表示を纏めた
         */
        public function display() {
            
            $this->displayHeader();
            $this->displayBody();
            $this->displayFooter();
            
        }

        /**
         * データ取得
         * @return mixed
         */
        public function getData() {

            return $this->data;
            
        }

        /**
         * ヘッダ表示
         * @return mixed
         */
        protected abstract function displayHeader();

        /**
         * ボディ表示
         * @return mixed
         */
        protected abstract function displayBody();

        /**
         * フッタ表示
         * @return mixed
         */
        protected abstract function displayFooter();
                
    }
    
?>