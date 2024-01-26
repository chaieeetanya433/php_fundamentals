<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Student{
            var $name;
            var $major;
            var $cgpa;

            function __construct($name, $major, $cgpa) {
                $this->name = $name;
                $this->major = $major;
                $this->cgpa = $cgpa;
            }

            function hasHonors() {
                if($this->cgpa > 3.5) {
                    return "true<br>";
                } else {
                    return "false<br>";
                }
            }
        }

            $student1 = new Student("chaieee", "Chef", 8.93);
            echo $student1->hasHonors();
            $student2 = new Student("ashish", "Coder", 2.5);
            echo $student2->hasHonors();
        ?>
</body>
</html>