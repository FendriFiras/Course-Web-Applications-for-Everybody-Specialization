<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("P",3.14);
        echo P;

        //caseinsensetive
        define("P",3.14,true);
        echo p;
        //constants are par default global !!
        

    ?>
</body>
</html>