<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/28
     * Time: 15:14
     */

    namespace Decorator;


    require_once 'UpperCaseText.php';
    require_once 'DoubleByteText.php';
    require_once 'PlainText.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php

    $text = (isset($_POST['text']) ? $_POST['text'] : '');
    $decorate = (isset($_POST['decorate']) ? $_POST['decorate'] : []);
    if($text !== '') {
        $text_obj = new PlainText();
        $text_obj->setText($text);

        foreach($decorate as $v) {
            switch($v) {
                case 'double':
                    $text_obj = new DoubleByteText($text_obj);
                    break;
                case 'upper':
                    $text_obj = new UpperCaseText($text_obj);
                    break;
            }
        }

        echo $text_obj->getText()."<br>";

    }

?>

<hr>

<form action="" method="post">
    text : <input type="text" name="text"/><br>
    decoration :
    <input type="checkbox" name="decorate[]" value="upper"/>Upper Decorate
    <input type="checkbox" name="decorate[]" value="double"/>Double Byte
    <input type="submit"/>
</form>

</body>
</html>