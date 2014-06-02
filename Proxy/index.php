<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/02
     * Time: 17:06
     */ 

    namespace Proxy;
    ?>

<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

    if(isset($_POST['dao']) && isset($_POST['proxy'])) {
        $dao = $_POST['dao'];
        switch ($dao) {
            case 1:
                include_once 'MockItemDao.php';
                $dao = new MockItemDao();
                break;
            default:
                include_once 'DbItemDao.php';
                $dao = new DbItemDao();
                break;
        }

        $proxy = $_POST['proxy'];
        switch ($proxy) {
            case 1:
                include_once 'ItemDaoProxy.php';
                $dao = new ItemDaoProxy($dao);
                break;
        }

        for($item_id = 1; $item_id <= 3; $item_id++) {
            $item = $dao->findById($item_id);
            echo 'ID = '. $item_id. '\'s Item is '. $item->getName().'.<br>';
        }

        $item = $dao->findById(2);
        echo 'ID = '. $item_id. '\'s Item is '. $item->getName().'.<br>';

    }
    
?>

<hr>

<form action="" method="post">
    <div>
        Dao Type :
        <input type="radio" name="dao" value="0" checked/>DbItemDao
        <input type="radio" name="dao" value="1"/>MockItemDao
    </div>
    <div>
        Proxy Type :
        <input type="radio" name="proxy" value="0" checked/>None
        <input type="radio" name="proxy" value="1"/>Done
    </div>
    <div>
        <input type="submit"/>
    </div>
</form>

</body>
</html>