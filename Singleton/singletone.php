<?php
/**
 * Created by PhpStorm.
 * User: s_takada
 * Date: 14/05/09
 * Time: 12:30
 */

namespace Singleton;


class singletone {

    private $id;
    
    private static $instance;

    private function __construct() {

        $this->id = md5(date('r').mt_rand());
    }
    
    public static function getInstance() {
        if(!isset(self::$instance)) {
            self::$instance = new singletone();
            echo 'created';
        }
        return self::$instance;
    }

    public function getID() {

        return $this->id;
    }

    public final function __clone() {
        throw new \RuntimeException('can\'t');
    }
    
} 