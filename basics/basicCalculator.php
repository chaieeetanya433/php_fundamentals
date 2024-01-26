<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>
<body>
    <form action="basicCalculator.php" method="get">
        First no: <input type="number" name="fno"><br>
        Second no: <input type="number" name="sno"><br>
        Addition: <input type="radio" name="oper" value="1"><br>
        Subtraction: <input type="radio" name="oper" value="2"><br>
        Multiplication: <input type="radio" name="oper" value="3"><br>
        Division: <input type="radio" name="oper" value="4"><br>
        <input type="submit">
    </form>
    <?php 
        $n1 = $_GET["fno"];
        $n2 = $_GET["sno"];
        $val = $_GET["oper"];
        // echo "$val";

        if($val == 1) {
            $res = $n1+$n2;
            echo "addition of $n1 and $n2 is ".$res."<br>";
        } 
        else if($val == 2) {
            $res = $n1-$n2;
            echo "subtraction of $n1 and $n2 is ".$res."<br>";
        }
        else if($val == 3) {
            $res = $n1*$n2;
            echo "multiplication of $n1 and $n2 is ".$res."<br>";
        } 
        else if($val == 4) {
            $res = $n1/$n2;
            echo "division of $n1 and $n2 is ".$res."<br>";
        }
    ?>
</body>
</html>