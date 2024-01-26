<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asso Arrs</title>
</head>
<body>
    <form action="associativeArrays.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>
    <?php
        // $grades = array("Chaieee"=>"A+", "jay"=>"B-", "oscar"=>"c+");
        // echo $grades["Chaieee"]."<br>";
        // $grades["Chaieee"] = "O";
        // echo $grades["Chaieee"]."<br>";
        // echo count($grades);

        $grades = array("Chaieee"=>"A+", "jay"=>"B-", "oscar"=>"c+");
        echo $grades[$_POST["student"]];

    ?>
</body>
</html>