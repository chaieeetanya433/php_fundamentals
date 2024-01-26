<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>  
    <?php
        $arr = array("hello", "banana");    //arr declaration
        echo $arr[0]."<br>";
        $arr[1] = "chicku";     //mutable
        echo $arr[1];       //accessed using indexes
        for($i=0; $i<count($arr); $i++) {       //printing all elements
            echo $arr[$i]."<br>";
        }
    ?>
</body>
</html>