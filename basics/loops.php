<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    
    <!-- while loop -->
    <?php
        $index = 1;
        while($index < 10) {
            echo "$index <br>";
            $index++;
        }
    ?>
    <!-- do-while loop -->
    <?php
        $index = 1;
        do{
            echo "$index <br>";
            $index++;
        }
        while($index < 10);
    ?>

    <!-- for loop -->
    <?php 
        for($i=1; $i<10; $i++) {
            echo $i."<br>";
        }
    ?>
</body>
</html>