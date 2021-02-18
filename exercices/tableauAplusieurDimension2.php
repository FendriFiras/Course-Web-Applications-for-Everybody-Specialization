<?php
    $a = array(
        "apple" => array(
            "color"=>"red",
            "taste"=>"sweet",
            "shape"=> "round"
        ),
        "orange" => array(
            "color" =>"orange",
            "taste" =>"sweet",
            "shape" =>"round"
        ),
        "banana" =>array(
            "color"=>"yellow",
            "taste"=>"paste",
            "shape"=>"banana-shaped"
        )
        );
    print_r($a);

    foreach($a as $name =>$array){
        echo "<h1>".$name."</h1>";
        foreach($array as $properties =>$value){
            echo "<ul>";
            echo "<li>".$properties."=>".$value."</li>";
            echo "</ul>";
        }
    }
?>