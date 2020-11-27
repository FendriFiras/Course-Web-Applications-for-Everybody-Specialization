<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function test1(){
            static $x=0;
            echo $x;
            $x++;
            echo "<br>";
        }
        test1();
        test1();
        test1();
        test1();
    ?>
</body>
</html>