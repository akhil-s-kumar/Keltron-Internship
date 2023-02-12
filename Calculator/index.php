<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/indexStyle.css" />
    <title>Calculator</title>
</head>

<body>
    <div class="head">
        <h1>Calculator</h1>
    </div>
    <div class="formSec">
        <form action="" method="post">
            <div class="form-ele">
                <label>Number 1</label>
                <input type="text" name="num1">
            </div>
            <div class="form-ele">
                <label>Number 2</label>
                <input type="text" name="num2">
            </div>
            <button type="submit" name="sum">Calculate Sum</button>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['sum'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sum = $num1 + $num2;
    $output = "The sum of $num1 and $num2 is: $sum";
    echo $output;
}
?>