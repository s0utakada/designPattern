<?php

    namespace Composite;

    require_once 'Group.php';
    require_once 'Employee.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php

    $root = new Group('001', '本社');
    $root->add(new Employee('00101', 'CEO'));
    $root->add(new Employee('00102', 'CTO'));

    $g1 = new Group('010', '東京支店');
    $g1->add(new Employee('01001', '支店長'));

    $g2 = new Group('020', '大阪支店');
    $g2->add(new Employee('02001', '支店長'));

    $g1->add($g2);
    $root->add($g1);

    $g3 = new Group('030', '千歳支店');
    $g3->add(new Employee('03001', '支店長'));

    $root->add($g3);

    $root->dump();

?>

</body>
</html>
