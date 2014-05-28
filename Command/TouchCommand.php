<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/15
     * Time: 16:23
     */

    namespace Command;


    require_once 'Command.php';
    require_once 'File.php';



    /**
     * Class TouchCommand
     *
     * @package command
     */
    class TouchCommand implements Command {


        /**
         * @var File
         */
        private $file;

        /**
         * @param File $file
         */
        public function __construct(File $file) {

            $this->file = $file;
        }

        /**
         *
         */
        public function execute() {

            $this->file->create();
        }

    } 