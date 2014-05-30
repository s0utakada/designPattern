<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/05/30
     * Time: 15:39
     */

    namespace Observer;


    require_once 'Cart.php';
    require_once 'PresentListener.php';
    require_once 'LoggingListener.php';

    /**
     * @return Cart
     */
    function createCart() {

        $cart = new Cart();
        $cart->addListener(new PresentListener());
        $cart->addListener(new LoggingListener());

        return $cart;
    }

?>

<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

    session_start();

    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : NULL;
    if(is_null($cart)) {
        $cart = createCart();
    }
    
    $item = (isset($_POST['item']) ? $_POST['item'] : '');
    $mode = (isset($_POST['mode']) ? $_POST['mode'] : '');
    
    switch($mode) {
        case 'add':
            echo '<p style="color: #aa0000">added</p>';
            $cart->addItem($item);
            break;
        case 'remove':
            echo '<p style="color: #008800">removed</p>';
            $cart->removeItem($item);
            break;
        case 'clear':
            echo '<p style="color: #008800">cleared</p>';
            $cart = createCart();
            break;
    }
    
    $_SESSION['cart'] = $cart;
    
    echo '<h1>item list</h1>';
    echo '<ul>';
    foreach($cart->getItems() as $item_name => $quantity) {
        echo '<li>'.$item_name.' '. $quantity.'個</li>';
    }

?>

<form action="" method="post">
    <select name="item">
        <option value="10:T-Shirt">T-Shirt</option>
        <option value="20:Teddy Bear">Teddy Bear</option>
        <option value="30:Cookie Set">Cookie Set</option>
    </select>
    <input type="submit" name="mode" value="add"/>
    <input type="submit" name="mode" value="remove"/>
    <input type="submit" name="mode" value="clear"/>
</form>

</body>
</html>