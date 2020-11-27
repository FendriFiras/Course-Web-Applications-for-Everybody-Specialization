<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //word count
        echo str_word_count("hello world");

        //reverse
        echo strrev("heelo world");

        //searche inside a string
        echo strpos("hello world","world");//6

        //replace
        echo str_replace("world","firas","hello world");//hello firas
    ?>
</body>
</html>