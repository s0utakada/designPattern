<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/03
     * Time: 9:53
     */

    namespace State;

    require_once 'User.php';

    session_start();

    $context = isset($_SESSION['context']) ? $_SESSION['context'] : NULL;
    if(is_null($context)) {
        $context = new User('hoge');
    }

    $mode = (isset($_GET['mode']) ? $_GET['mode'] : '');
    switch($mode) {
        case 'state':
            echo '<p style="color: #aa0000">Change State</p>';
            $context->switchState();
            break;
        case 'inc':
            echo '<p style="color: #008800">Count Up</p>';
            $context->incrementCount();
            break;
        case 'reset':
            echo '<p style="color: #008800">Count Reset</p>';
            $context->resetCount();
            break;
    }
    
    $_SESSION['context'] = $context;

?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
    echo 'ようこそ、' . $context->getUserName() . 'さん<br>';
    echo '現在、ログインして' . ($context->isAuthenticated() ? 'います' : 'いません') . '<br>';
    echo '現在のカウント：' . $context->getCount() . '<br>';
    echo $context->getMenu() . '<br>';
?>

</body>
</html>