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
    <title>Login</title>
</head>
<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>LOGIN</legend>
                <table>

                    <td>Name:</td>
                    <td><input type="text" name="username" value="" /> </td>
                <tr>
                    <td> Password::</td>
                    <td><input type="password" name="pass"  value=""> <br> </td>

                </tr> 

                </table>
                
                    <input type="checkbox" name="item[]" >Remember Me <br> <br>

                    <input type="submit" name="submit" value="Submit">
                    <a href=" https://www.google.com/">Forgot Password?</a> <br>

        </fieldset>
    </form>
    
</body>
</html>