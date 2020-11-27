<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x =1;

        while ($x < 10){
            $x++;
            echo $x;
        }
        echo "<br>";
        $y =2;
        do{
            echo $y;
            $y++;
        }while($y <= 5);
        
       //for loop
       for ($x=0; $x <= 10;$x++){
            echo "hello world";
        }

        //for each loop
        echo "<br>";
        $cars =array("Golf","Volvo","bmw");
        foreach($cars as $value){
            echo "$value<br>";
        }
    ?>
</body>
</html>