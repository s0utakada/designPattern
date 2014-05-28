<?php
/**
 * Created by PhpStorm.
 * User: s_takada
 * Date: 14/05/09
 * Time: 15:50
 */ 

require_once 'ReaderFactory.php';

?>

<html lang="ja">
<head>
<title>人とモノ</title>
</head>
<body>
<?php
    $filename = 'music.xml';
    
    $factory = new \Factory\ReaderFactory();
    $data = $factory->create($filename);
    $data->read();
    $data->display();
?>
</body>
</html>