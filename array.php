<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array's</title>
</head>
<body>
    <?php 
    
    
    $friends = array("Kevin", "Karen", "Oscar", "Jim");
    $friends[4] = "Dwight";
    echo $friends[4];
    
    echo count($friends);
    
    ?>
<br><br><br>
    <!-- hOW TO USE CHECK BOXS -->

    <form action="array.php" method="post">

  Apples: <input type="checkbox" name="fruits[]" value = "apples"><br>
  Oranges: <input type="checkbox" name="fruits[]" value = "oranges"><br>
  Pears: <input type="checkbox" name="fruits[]" value = "pears "><br>
<input type="submit" value="submit">
    </form>
<br><br>

    <?php 
    
    $fruits = $_POST["fruits"];
    echo $fruits[1];
    
    ?>
<br><br>

    <!-- using Assoiative Array's -->


    <form action="array.php" method="post">

    <input type="text" name="student" >

    <input type="submit" value="submit">
    
    </form>

    <?php 
    // Assoiative array's is selecting a key and then mapping it to a value like below

    $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+", "Linda" => "F");

    // How to access the values
    // echo $grades["Pam"];


    // This is how we can want user input to choose grades for students
    echo $grades[$_POST["student"]];
    
    ?>

</body>
</html>