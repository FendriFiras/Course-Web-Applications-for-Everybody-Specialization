<?php
    if(isset($_POST['user_name'])){
        if(!empty($_POST['user_name'])){
            echo "your name is".$_POST['user_name']."<br>";
            echo "your email is".$_POST['user_email'];
        }
    }
   


?>