<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 5; //global variabel

        function test1(){
            echo $x;
            //will generate an error
        }
        test1();

        function test2 (){
            $y =5; //local scope
            echo $y;
            //it will works
        }
        test2();
        echo $y; //will generate an error
    ?>
</body>
</html>