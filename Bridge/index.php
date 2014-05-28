<?php

    namespace Bridge;

    require_once 'Listing.php';
    require_once 'ExtendedListing.php';
    require_once 'FileDataSource.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php

    $list1 = new Listing(new FileDataSource('data.txt'));
    $list2 = new ExtendedListing(new FileDataSource('data.txt'));

    try {
        $list1->open();
        $list2->open();
    } catch(\Exception $e) {
        die($e->getMessage());
    }
    
    $data = $list1->read();
    echo $data;
    
    $data = $list2->readWithEncode();
    echo $data;

    $list1->close();
    $list2->close();

?>

</body>
</html>
