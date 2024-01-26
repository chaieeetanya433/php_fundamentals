<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Movie {
            public $title;
            private $rating;

            function __construct($title, $rating) {
                $this->title = $title;
                $this->setRating($rating);
            }

            //getter
            function getRating() {
                return $this->rating;
            }

            //setter
            function setRating($rating) {
                if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
                    $this->rating = $rating;
                }
            }

        }

        $avengers = new Movie("salaar", "PG-13");
        //G, PG, PG-13, R, NR

        $avengers->setRating("G");
        echo $avengers->getRating();

    ?>
</body>
</html>