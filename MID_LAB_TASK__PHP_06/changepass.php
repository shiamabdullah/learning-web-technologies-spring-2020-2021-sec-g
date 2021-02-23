<?php

$name = $password = "";

if(isset($_POST['submit'])){

    $name 		=  $_POST['username'];
    $password   =  $_POST['pass'];
        if($name == ""){
            echo "Null submission... \n"; 
        }
        else if(strlen($name)<2){
            echo "name must be atleast 2 char\n";
            
        }
        
        else{
            echo " name: $name \n";

        }


        if(strlen($password)<8){
            echo "password must be 8 char long\n";
        }

        if (!strpos($password, '#') and !strpos($password, '@') and !strpos($password, '$') and  !strpos($password, '%')) {
            echo "\n password must contain this special characters (@, #, $, %)";
        }
       
        else{
            echo "\n password $password";
         
            
        }



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>CHANGE PASSWORD</legend>
                <table>

                    <td>Current Password:</td>
                    <td><input type="text" name="pass_cur" value="" /> </td>
                <tr>
                    <td> New Password :</td>
                    <td><input type="name" name="pass_new"  value=""> <br> </td>

                </tr>
                
                <tr>
                    <td> Retype New Password :</td>
                    <td><input type="name" name="pass_new"  value=""> <br> </td>

                </tr> 

                <input type="submit" name="submit" value="Submit">


                

        </fieldset>
    </form>
    
</body>
</html>