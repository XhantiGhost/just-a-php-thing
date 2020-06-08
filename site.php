<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <?php
    // variables start with $ in Php
    // Example 

    // $characterName = "Axe's";
    // $characterAge = 35;

    // echo "<h1> $characterName world </h1>";
    // echo "<hr>";
    // echo "<p>This is my site</p>";
    // echo "<p>I am $characterAge</p>"

    ?>

<!-- different types of variable and strings to store
different types of data -->

    <?php 

    // $stringVariable = "This is my string";
    // $numVariable = 99;
    // $floatVariable = 56.4;
    // $isMale = false;

    // echo strtolower($stringVariable);
    // echo "<br><br>";
    // echo $stringVariable[4];


    // Starting of with php forms
    ?>

    <form action="site.php" method="get">
    Name:<br>
    <input type="text" name="name" id="name"><br>
    Age: <br> <input type="number" name="age" id="age">
    <input type="submit" value="Submit">
    </form>
<br><br>
   Your name is  <?php 
    
    echo $_GET["name"]
    
    ?>
<br>
    You are : <?php echo $_GET["age"]
?>
</body>
</html>