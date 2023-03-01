<?php
if(isset($_POST['add'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 + $num2;
    echo "The result is: $result";
}
elseif(isset($_POST['subtract'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 - $num2;
    echo "The result is: $result";
}
elseif(isset($_POST['multiply'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 * $num2;
    echo "The result is: $result";
}
elseif(isset($_POST['divide'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    if($num2 == 0) {
        echo "Cannot divide by zero";
    }
    else {
        $result = $num1 / $num2;
        echo "The result is: $result";
    }
}
?>

