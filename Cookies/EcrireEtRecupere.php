<?php
    $cookie_name="user";
    $cookie_value="firas fendri";

    setcookie($cookie_name,$cookie_value,time()+86400,"/");

?>
<html>
    <body>
        <h1>Recuperation Des Donnees</h1>
        <?php
            if(isset($_COOKIE[$cookie_name])){
                echo "Hello ".$cookie_name."     Your name is ".$_COOKIE[$cookie_name];
            }else{
                echo "there is no variable";
            }
        ?>
    </body>
</html>