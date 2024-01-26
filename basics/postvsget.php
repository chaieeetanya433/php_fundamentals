<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="postvsget.php" method="post"> 
        <label for="pass">Enter password: </label>
        <input type="password" name="pass"/><br>
        <input type="submit" value="Submit"><br>
    </form>
    <?php 
        echo $_POST["pass"];
    ?>
</body>
</html>