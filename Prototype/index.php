<?php
    /**
     * Created by PhpStorm.
     * User: s_takada
     * Date: 14/06/02
     * Time: 13:54
     */

    namespace Prototype;

    require_once 'ItemManager.php';
    require_once 'DeepCopyItem.php';
    require_once 'ShallowCopyItem.php';

    function testCopy(ItemManager $manager, $item_code) {

        $item1 = $manager->create($item_code);
        $item2 = $manager->create($item_code);

        $item2->getDetail()->comment = 'comennt updated !!!';

        echo '■オリジナル';
        $item1->dumpData();
        echo '■コピー';
        $item2->dumpData();
        echo '<hr>';

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

    $manager = new ItemManager();

    $item = new DeepCopyItem('ABC0001', '限定Tシャツ', 3800);
    $detail = new \stdClass();
    $detail->comment = '商品Aのコメントです';
    $item->setDetail($detail);
    $manager->registItem($item);

    $item = new ShallowCopyItem('ABC0002', 'ぬいぐるみ', 1500);
    $detail = new \stdClass();
    $detail->comment = '商品Bのコメントです';
    $item->setDetail($detail);
    $manager->registItem($item);

    testCopy($manager, 'ABC0001');
    testCopy($manager, 'ABC0002');

?>

</body>
</html>