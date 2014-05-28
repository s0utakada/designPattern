<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/09
     * Time: 14:42
     */

    namespace Adapter;

    require_once 'DisplaySourceFile.php';
    require_once 'ShowFile.php';


    class DisplaySourceFileImpl implements DisplaySourceFile {

        private $show_file;

        function __construct($show_file) {

            $this->show_file = new ShowFile($show_file) ;
        }

        public function display() {
            $this->show_file->showHighlight();
        }

    } 