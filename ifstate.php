<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Statement</title>
</head>
<body>
    


    <?php 
    $isMale = true;

    if ($isMale){

        echo "Nigga you a dude";

    }else {

        echo "you a chick nothing else";
    }
    
    ?>
    <br><br>

    <?php 
        function getMax($num1, $num2, $num3) {
           if ($num1 >= $num2 && $num1 >= $num3) {
               return $num1;
           }
           elseif ($num2 >= $num1 && $num2 >= $num3) {
               # code...
               return $num2;
           }
           else {
               return $num3;
           }
        }
       echo getMax(103, 2290, 300);
    
    ?>
</body>
</html>