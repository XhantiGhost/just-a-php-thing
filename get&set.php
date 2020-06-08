<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters & Setters</title>
</head>
<body>
    <?php 
    
        class Movie {
            public $title;
            // we can limit access by making variable private
            private $rating;

            // we use getters and setters to limit what the user can give as values
            // to our values for example in this one the rating of a movie
            // where we say the ratings are only G, PG, PG-13, R, NR
            // and we only want to user to be able to choose only from those above

            function __construct($title, $rating) {
                $this->title = $title;
                $this->setRating($rating);
            }


              // Getters and Setters are special functions in php which allow user
            // to set the attribute and also allow user to get attriutes

            // this is how to get attributes using getter function
            function getRating(){
                return $this->rating;
            }

            // how to set the rating attribute
            function setRating($rating){
                if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
                   $this->rating = $rating;
                }
                else {
                    $this->rating = "NR";
                }
            }

        }

        $avenagers = new Movie("Avangers", "PG-13");


        $avenagers->setRating("Dog");
        echo $avenagers->getRating();
    
    
    ?>
</body>
</html>