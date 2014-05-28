<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/09
     * Time: 15:23
     */

    namespace Factory;


    require_once 'Reader.php';



    class CSVFileReader implements Reader {

        private $filename;
        
        private $handler;

        function __construct($filename) {

            if(!is_readable($filename)) {
                throw new \Exception('File "'.$filename.'" is not readable !');
            }
            $this->filename = $filename;
        }

        public function read() {
            
            $this->handler = fopen($this->filename, "r");
        }

        public function display() {
            
            $column = 0;
            $tmp = '';
            
            while($data = fgetcsv($this->handler, 1000, ",")) {
                $num = count($data);
                for($c = 0; $c < $num; $c++) {
                    if($c ==0) {
                        if($column != 0 && $data[$c] != $tmp) {
                            echo "</ul>";
                        }
                        if($data[$c] != $tmp) {
                            echo '<b>'.$data[$c].'</b>';
                            echo '<ul>';
                            $tmp = $data[$c];
                        }
                    } else {
                        echo '<li>';
                        echo $data[$c];
                        echo '</li>';
                    }
                }
                $column++;
            }
            echo '<ul>';
            fclose($this->handler);
        }
    }