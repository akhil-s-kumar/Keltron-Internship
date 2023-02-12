<?php
$display = '';
$operator = '';
$result = '';
$value1 = '';
$value2 = '';
if (isset($_POST['digit'])) {
    $display = $_POST['display'] . $_POST['digit'];
    echo $operator;
    if($value1 == '' || $operator == ''){
        $value1 = $_POST['digit'];
        echo "Akhil";
        echo $value1;
    }elseif ($operator == '+'){
            $value1 = $value1 + $_POST['digit'];
            echo $value1;
    }
}

if (isset($_POST['opperation'])) {
    $display = $_POST['display'] . $_POST['opperation'];
    $operator = $_POST['opperation'];
}

if (isset($_POST['clear'])) {
    $display = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/calculatorStyle.css?v=<?php echo time(); ?>" />
    <title>Calculator</title>
</head>

<body>
    <div class="calculator">
        <div class="card">
            <div class="card-body">
                <form name="calculatorForm" action="#" method="post">
                    <div class="displayBox">
                        <input name="display" type="text" value=<?php echo $display ?>>
                    </div>
                    <div class="buttonBox">
                        <button type="submit" name="clear" class="operation">AC</button>
                        <button name="del" class="operation">DEL</button>
                        <button name="mod" class="operation">%</button>
                        <button type="submit" name="opperation" value="÷" class="operation">÷</button>
                    </div>
                    <div class="buttonBox">
                        <button type="submit" name="digit" value="7" class="number">7</button>
                        <button type="submit" name="digit" value="8" class="number">8</button>
                        <button type="submit" name="digit" value="9" class="number">9</button>
                        <button type="submit" name="opperation" value="×" class="operation">×</button>
                    </div>
                    <div class="buttonBox">
                        <button type="submit" name="digit" value="4" class="number">4</button>
                        <button type="submit" name="digit" value="5" class="number">5</button>
                        <button type="submit" name="digit" value="6" class="number">6</button>
                        <button type="submit" name="opperation" value="-" class="operation">-</button>
                    </div>
                    <div class="buttonBox">
                        <button type="submit" name="digit" value="1" class="number">1</button>
                        <button type="submit" name="digit" value="2" class="number">2</button>
                        <button type="submit" name="digit" value="3" class="number">3</button>
                        <button type="submit" name="opperation" value="+" class="operation">+</button>
                    </div>
                    <div class="buttonBox">
                        <button name="digit" value="0" class="number" style="border-bottom-left-radius: 15px;">0</button>
                        <button name="digit" value="00" class="number">00</button>
                        <button name="digit" value="." class="number">.</button>
                        <button name="equal" class="operationOut" style="border-bottom-right-radius: 15px;">=</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>


</html>