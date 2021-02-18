<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 20;
        $y = 30;
        /*
        function test1 (){
            global $x ,$y;
            $y=$x +$y;
        }
        */
        function test2 (){
            $GLOBALS['z']=$GLOBALS['y']+$GLOBALS['x'];
        }
        test2();
        echo $z;//output variable of y

        //other superglobal
        echo "<hr>";
        echo $_SERVER['PHP_SELF'];///LearnPHP/GlobalKeyWord.php
        echo "<hr>";
        echo $_SERVER['SERVER_NAME'];//localhost
    ?>
</body>
</html>