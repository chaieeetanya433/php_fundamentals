<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Chef {
            function makeChicken() {
                echo "The chef makes chicken <br>";
            } 
            function makeSalad() {
                echo "The chef makes salad <br>";
            } 
        }

        class ItalianChef extends Chef{
            function makePasta() {
                echo "The chef makes pasta";
            }
        }

        $chef = new Chef();
        $chef->makeChicken();
        $ItalianChef = new ItalianChef();
        $ItalianChef->makeChicken();
        $ItalianChef->makePasta();
    ?>
</body>
</html>