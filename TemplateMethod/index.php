<?php
    require_once 'listDisplay.php';
    require_once 'tableDisplay.php';

    $data = [
        '最初',
        '次',
        '三番目',
        '最後'
    ];

    $display1 = new listDisplay($data);
    $display2 = new tableDisplay($data);

    $display1->display();

    echo '<hr>';

    $display2->display();

?>