<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/09
     * Time: 15:43
     */

    namespace Factory;


    require_once 'Reader.php';
    require_once 'CSVFileReader.php';
    require_once 'XMLFileReader.php';



    class ReaderFactory {


        public function create($filename) {

            $reader = $this->createReader($filename);
            return $reader;
        }
        
        private function createReader($filename) {
            
            $poscsv = stripos($filename, '.csv');
            $posxml = stripos($filename, '.xml');
            
            if($poscsv !== false) {
                $r = new CSVFileReader($filename);
                return $r;
            } else if($posxml !== false) {
                return new XMLFileReader($filename);                
            } else {
                die('This filename is not supported : '.$filename);
            }
        }
    } 