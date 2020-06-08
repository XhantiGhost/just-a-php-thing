<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    
<!-- Using functons in Php -->

<?php 
    function sayHello($name, $age){

        echo "Hello $name, you are $age <br>";
    }

    sayHello("Xhanti", 40);
    sayHello("Dave", 13);
    sayHello("Oscar", 80);


?>

<br><br><br>

<!-- Using functions with return statements -->

<?php 
 
function cubeNumber($num) {
    
    return $num * $num * $num;
}

$cubeResult = cubeNumber(4);
echo $cubeResult;


?>

</body>
</html>