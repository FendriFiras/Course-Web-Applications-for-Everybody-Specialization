<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name =$website = $position = $estatus = $comments ="";
        if ($_SERVER["REQUEST_METHOD"] == 'POST'){
            $name = val($_POST["name"]);
            $website = val($_POST["website"]);
            $position = val($_POST["position"]);
            $estatus = val($_POST["estatus"]);
            $comments = val($_POST["comments"]);
        }
        //just for verification
        function val($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <form name="employment" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table width="550" border="0" >
            <tr >
                <td><h2>Employment application</h2></td>
                <td></td>
            </tr>
            <tr>
                <td>Names</td>
                <td><input type="text" name="name" maxlength="50"></td>
            </tr>
            <tr>
                <td>Website</td>
                <td><input type="text" name="website"></td>
            </tr>
            <tr>
                <td>Position</td>
                <td>
                    <select name="position" id="">
                        <option value="accountant">Accountant</option>
                        <option value="Recepiant">Recepiant</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Employment status</td>
                <td>
                    <input type="radio" name="estatus" value="employed" checked/>employed
                    <input type="radio" name="esatus" value="unemployed"/>UnEmployed
                </td>
            </tr>
            <tr>
                <td>Additional comments</td>
                <td><textarea name="comments" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit">submit</button>
                    <button type="reset" name="reset">reset</button>
                </td>
            </tr>
        </table>
    </form>
    <h1>informations:</h1><br>
    
    <?php
    echo "Name:  ".$name."<br>";
    echo "website: ".$website."<br>";
    echo "position:  ".$position."<br>";
    echo "estatus:   ".$estatus."<br>";
    echo "comments:  ".$comments."<br>";    
    ?>
</body>
</html>