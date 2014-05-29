<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/28
     * Time: 17:02
     */

    namespace Flyweight;

    require_once 'ItemFactory.php';

    /**
     * @param $data Item[]
     */
    function dumpData($data) {

        echo '<dl>';
        foreach($data as $obj) {
            echo '<dt>'.htmlspecialchars($obj->getName(), ENT_QUOTES).'</dt>';
            echo '<dd>Item Code : '.$obj->getCode().'</dd>';
            echo "<dd>\\ ".number_format((floatval($obj->getPrice()))).'-</dd>';
        }
        echo '</dl>';
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php


    $factory = ItemFactory::getInstance('data.txt');

    $item = [];
    $item[] = $factory->getItem('ABC0001');
    $item[] = $factory->getItem('ABC0002');
    $item[] = $factory->getItem('ABC0003');

    dumpData($item);

    if($item[0] === $factory->getItem('ABC0001')) {
        echo 'same object';
    } else {
        echo 'different object';
    }

?>

</body>
</html>