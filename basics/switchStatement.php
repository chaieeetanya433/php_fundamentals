<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch statement</title>
</head>
<body>
    <form action="switchStatement.php" method="post">
        what was your grade
        <input type="text" name="grade">
        <input type="submit">
    </form>
    <?php
        $grade = $_POST["grade"];
        switch($grade) {
            case "A":
                echo "You did amazing!";
                break;
            case "B":
                echo "You did good!";
                break;
            default: 
                echo "Okay!";
        }
    ?>
</body>
</html>