<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/15
     * Time: 16:28
     */

    namespace Command;


    require_once 'Command.php';
    require_once 'File.php';



    /**
     * Class CopyCommand
     *
     * @package command
     */
    class CopyCommand implements Command {


        /**
         * @var File
         */
        private $file;

        /**
         * @param File $file
         */
        public function __construct($file) {

            $this->file = $file;
        }

        /**
         *
         */
        public function execute() {

            $file = new File('copy_of_'.$this->file->getName());
            $file->create();
        }

    } 