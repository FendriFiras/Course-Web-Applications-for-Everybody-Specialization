<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cars =array("bmw" , "Volvo" , "Golf");
        echo $cars[0];

        //associative araays
        $tscore = array(
            "john" => "30",
            "firas" => "50"
        );
        echo count($tscore);
        echo "<br>";

        foreach ($tscore as $value =>$key){
            echo "key=".$value."and value".$key;
        }
    ?>
</body>
</html>