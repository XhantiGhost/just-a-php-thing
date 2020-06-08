<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="basicCal.php" method="get">

    <input type="number" name="num1"><br>
    <input type="number" name="num2">

    <input type="submit" value="submit">
    </form>


  Answer:  <?php echo $_GET["num1"] + $_GET["num2"] ?>

<br><br>
<br><br>
    <!-- MAD Lib games -->

    <form action="basicCal.php" method="get">

    Color: <input type="text" name="color"><br>
    PluralNoun: <input type="text" name="pluralnoun"><br>
   Celebrity : <input type="text" name="celebrity"><br>

    <input type="submit" value="Submit">
    </form>


    <?php
    
    $color = $_GET["color"];
    $pNoun = $_GET["pluralnoun"];
    $celeb = $_GET["celebrity"];


    echo "<p>Roses are $color</p>";
    echo "<p>$pNoun are blue</p>";
    echo "<p>I love $celeb</p>";
    
    ?>

</body>
</html>