<?php

    namespace Chain;

    require_once 'MaxLengthValidationHandler.php';
    require_once 'NotNullValidationHandler.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php

    if(isset($_POST['validate_type']) && isset($_POST['input'])) {
        
        $validate_type = $_POST['validate_type'];
        $input = $_POST['input'];
        
        $not_null_handler = new NotNullValidationHandler();
        $length_handler = new MaxLengthValidationHandler(8);
        
        $option_handler = null;
        switch ($validate_type) {
            case 1:
                include_once 'AlphabetValidationHandler.php';
                $option_handler = new AlphabetValidationHandler();
                break;
            case 2:
                include_once 'NumberValidationHandler.php';
                $option_handler = new NumberValidationHandler();
                break;
        }
        
        if(!is_null($option_handler)) {
            $length_handler->setHandler($option_handler);
        }
        $handler = $not_null_handler->setHandler($length_handler);
        
        $result = $handler->validate($_POST['input']);
        if ($result == false) {
            echo '検証できませんでした';
        } else if (is_string($result) && $result !== '') {
            echo '<p style="color: #dd0000;">'.$result.'</p>';
        } else {
            echo '<p style="color: #008800;">OK</p>';
        }
    }
    
?>

<form action="" method="post">
    <div>
        値：<input type="text" name="input">
    </div>
    <div>
        検証内容：<select name="validate_type">
            <option value="0">任意</option>
            <option value="1">半角英字</option>
            <option value="2">半角数字</option>
            </select>
    </div>
    <div>
        <input type="submit">
    </div>
</form>

</body>
</html>
