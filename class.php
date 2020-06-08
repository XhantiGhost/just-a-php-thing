<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    
    <!-- How to create Classes -->

    <?php 
        class Book {
          var $title;
          var $author;
          var $pages;

         
        }

        $book1 = new Book();
        $book1 -> title = "Harry Potter";
        $book1 -> author = "JK Rowling";
        $book1 -> pages = 400;

        $book2 = new Book();
        $book2 -> title = "Lord of the Rings";
        $book2 -> author = "Tolkien";
        $book2 -> pages = 700;

        
        echo $book1-> author;
        echo $book1 -> title;
        echo $book1 -> pages;

        echo $book2 -> author;
    ?>
<br><br><br>

    <!-- classes using functions -->

    <?php 
    
    class Books {
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle, $aAuthor, $aPages){
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
      }
  
      $bookz = new Books("Harry Potter", "JK Rowling", 600);

      $booksk = new Books("Lord of the flies", "Tolkien", 900); 

      echo $bookz->title;
    
    ?>
</body>
</html>