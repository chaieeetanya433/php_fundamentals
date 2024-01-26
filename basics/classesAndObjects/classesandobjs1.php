<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classesAndObjects</title>
</head>
<body>
    <?php 
        class Book{
            var $title;
            var $author;
            var $pages;

            //default constructor
            // function __construct() {
            //     echo "book's name is Aisha";
            // }

            //parameterized constructor
            // function __construct($name) {
            //     echo "book's name is $name";
            // }

            function __construct($aTitle, $aAuthor, $aPages) {
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        // $book1 = new Book();
        // $book1->title = "harry porter";
        // $book1->author = "JK Rowling";
        // $book1->pages = 400;

        // $book2 = new Book();
        // $book2->title = "GOT";
        // $book2->author = "night king";
        // $book2->pages = 300;

        // echo $book1->title."<br>";
        // echo $book1->author."<br>";
        // echo $book1->pages."<br>";

        // echo $book2->title."<br>";
        // echo $book2->author."<br>";
        // echo $book2->pages."<br>";
        
        // $book3 = new Book();
        // $book4 = new Book("millie");
        
        $book5 = new Book("Chaieee's book", "Chaitanya", 350);
        
        echo $book5->title."<br>";
        echo $book5->author."<br>";
        echo $book5->pages."<br>";

    ?>
</body>
</html>