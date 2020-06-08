<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="urlpara.php" method="post">
    Name: <br>
    <input type="text" name="name" id="name"><br>
    <input type="submit" value="submit">
    </form>

    <br><br>

    <?php 
    
    echo $_POST["name"];
    
    ?>
</body>
</html>