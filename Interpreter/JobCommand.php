<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/29
     * Time: 12:53
     */

    namespace Interpreter;


    /**
     * Class JobCommand
     *
     * @package Interpreter
     */
    class JobCommand {


        /**
         * @param Context $context
         *
         * @throws RuntimeException
         */
        public function execute(Context $context) {

            if($context->getCurrentCommand() !== 'begin') {
                throw new RuntimeException('illegal command '.$context->getCurrentCommand());
            }
            $command_list = new CommandListCommand();
            $command_list->execute($context->next());
        }

    } 