<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x =21;
        if ($x<20){
            echo $x."less than  20";
        }
        else{
            echo $x."greater than  20";
        }
        echo "<br>";
        $y = 55;
        if ($y < 50){
            echo "F";
        }else if (($y > 50) && ($y<60)){
            echo "E";
        }
        else if ($y > 60 && $y<70){
            echo "D";
        }
        else if ($y > 70 && $y<80){
            echo "C";
        }
        else if ($y > 80 && $y<90){
            echo "B";
        }else{
            echo "A";
        }
        echo "<br>";
        $car ="Golf";

        switch($car){
            case "Golf":
                echo "you are driving a nice golf";
            break;
            case "Volvo":
                echo "you are driving a nice Volvo";
            break;

            default:
                echo " you dont drive";
        }
    ?>
</body>
</html>