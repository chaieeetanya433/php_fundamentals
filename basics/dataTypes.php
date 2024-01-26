<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $phrase = "To be or not to be"; //string
        $age = 30;  //number
        $gpa = 9.05; //floating point
        $res = true;  //boolean (true or false)
        // echo $phrase;

        //strings
        $sentence = "hello chaieee";
        // echo $sentence;

        echo strtolower($sentence); echo "<br>";    //hello chaieee
        echo strtoupper($sentence);echo "<br>";     //HELLO CHAIEEE
        echo strrev($sentence);echo "<br>"; //eeeiahc olleh
        echo strlen($sentence);echo "<br>";     //14
        echo $sentence[1];echo "<br>";  //e
        echo str_replace("hello", "bye", $sentence);echo "<br>";    //op:- bye chaieee
        echo substr($sentence, 6, 4);echo "<br>";   //op:- chai

        //count no. of 'e' in $sentence
        // $cnt = 0;
        // for($i=0; $i<strlen($sentence); $i++) {
        //     if($sentence[$i] == 'e') {
        //         $cnt++;
        //     }
        // }
        // echo $cnt;



    ?>
</body>
</html>