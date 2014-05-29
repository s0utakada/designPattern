<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/29
     * Time: 12:58
     */

    namespace Interpreter;


    /**
     * Class CommandListCommand
     *
     * @package Interpreter
     */
    class CommandListCommand {


        /**
         * @param Context $context
         *
         * @throws RuntimeException
         */
        public function execute(Context $context) {

            while(TRUE) {
                $current_command = $context->getCurrentCommand();
                if(is_null($current_command)) {
                    throw new RuntimeException('"end" not found ');
                } else if($current_command === 'end') {
                    break;
                } else {
                    $command = new CommandCommand();
                    $command->execute($context);
                }
                $context->next();
            }
        }
    } 