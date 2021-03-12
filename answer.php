<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case '0':
            $answer = $num1 + $num2;
            $operator_str = "+";
            break;
        case '1':
            $answer = $num1 - $num2;
            $operator_str = "-";
            break;
        case '2':
            $answer = $num1 * $num2;
            $operator_str = "×";
            break;
        case '3':
            $answer = $num1 / $num2;
            $operator_str = "÷";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算結果</title>
</head>
<body>
    <h1>計算結果</h1>
    <p>
        <?= "${num1} ${operator_str} ${num2} = ${answer}" ?>
    </p>
    <a href="calc_form.php">戻る</a>
</body>
</html>