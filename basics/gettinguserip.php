<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="gettinguserip.php" method="get"> 
        <label for="name">Enter you name: </label>
        <input type="text" name="name"/><br>
        <input type="submit" value="Submit"><br>
    </form>
    <?php 
        echo "your name is ".$_GET["name"];
    ?>
</body>
</html>