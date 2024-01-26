<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        // function with default args
        /*function sayhi($name, $age=20) {
            echo "hii $name, and i am $age years old!";
        }
        sayhi("Chaieee", 19);
        echo "<br>";
        sayhi("Priya");*/

        function cube($num) {
            return $num*$num*$num;
            // echo "print";    //this line never gets executed since the return statement is already executed
        }

        $cubeRes = cube(2);
        echo $cubeRes;
    ?>
</body>
</html>