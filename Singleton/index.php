<?php
/**
 * Created by PhpStorm.
 * User: s_takada
 * Date: 14/05/09
 * Time: 12:37
 */ 

require_once 'singletone.php';

$instance1 = \Singleton\singletone::getInstance();
sleep(1);
$instance2 = \Singleton\singletone::getInstance();

echo '<hr>';

echo 'instance ID:'.$instance1->getID().'<br>';
echo '$instance1->getID() === $instance2->getID() :'. ($instance1->getID() === $instance2->getID() ? 'true' : 'false');
echo '<hr>';

echo '$instance1 === $instance2 :'. ($instance1 === $instance2 ? 'true' : 'false');
echo '<hr>';

$instance1_clone = clone $instance1;