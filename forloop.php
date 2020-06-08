<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For- Loop</title>
</head>
<body>
    <?php

    for ($i=0; $i <= 5 ; $i++) { 
        echo "$i <br>";
    }
?>

<br><br>

<?php
    $luckyNumbers = array(4, 8, 14, 16, 23, 42);

    for ($i=0; $i < count($luckyNumbers); $i++) { 

        echo "$luckyNumbers[$i] <br>";
    }
    
    ?>
</body>
</html>