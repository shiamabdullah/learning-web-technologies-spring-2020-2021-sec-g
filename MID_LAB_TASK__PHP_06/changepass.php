<?php

$cn = $np = $rnp ="";

if(isset($_POST['submit'])){

    $cn 		=  $_POST['pass_cur'];
    $np 		=  $_POST['pass_new'];
    $rnp 		=  $_POST['re_pass_new'];

        if($np != $cn and $np==$rnp ){
            echo "changed \n"; 
        }
       
        
        else{
            echo "validatipn error";

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
                    <td><input type="name" name="re_pass_new"  value=""> <br> </td>

                </tr> 
                </table>
                <input type="submit" name="submit" value="Submit">

                

        </fieldset>
    </form>
    
</body>
</html>