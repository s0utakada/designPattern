<?php

    namespace Command;

    require_once 'Queue.php';
    require_once 'TouchCommand.php';
    require_once 'CompressCommand.php';
    require_once 'CopyCommand.php';
    require_once 'File.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php

    $queue = new Queue();
    $file = new File("sample.txt");
    $queue->addCommand(new TouchCommand($file));
    $queue->addCommand(new CompressCommand($file));
    $queue->addCommand(new CopyCommand($file));
    
    $queue->run();
    
?>

</body>
</html>
