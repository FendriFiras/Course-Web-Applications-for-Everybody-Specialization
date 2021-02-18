<?php
    $car = array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)

    );

    for ($row=0 ; $row<4; $row++){
        echo "<h1>".$row."</h1>"."<br>";
        for ($colum=0 ; $colum<3; $colum++){
            echo "<ul>";
            echo "<li>".$car[$row][$colum]."</li>";
            echo "</ul>";
        }
        echo "<hr>";
    }


?>