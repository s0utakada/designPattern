<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/30
     * Time: 11:53
     */

    namespace Mediator;

    require_once 'Chatroom.php';
    require_once 'User.php';

    $chatroom = new Chatroom();

    $mike = new User('Mike');
    $bob = new User('Bob');
    $tom = new user('Tom');

?>

<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

    $chatroom->login($mike);
    $chatroom->login($bob);
    $chatroom->login($tom);

    $mike->sendMessage('Bob', 'Hi!');
    $mike->sendMessage('Tom', 'Hi!');

?>
</body>
</html>