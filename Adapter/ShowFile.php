<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/09
     * Time: 14:34
     */

    namespace Adapter;


    class ShowFile {


        private $filename;

        public function __construct($filename) {

            if(!is_readable($filename)) {
                throw new \Exception('file "'.$filename.'" is not readable');
            }
            $this->filename = $filename;
        }

        public function showPlain() {

            echo '<pre>';
            echo htmlspecialchars(file_get_contents($this->filename), ENT_QUOTES);
            echo '</pre>';
        }

        public function showHighlight() {

            highlight_file($this->filename);
        }

    } 