<?php

use function PHPSTORM_META\elementType;

if (isset($_POST['submit'])) {
    echo 'pressed';
}

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password    =  $_POST['password'];
    $con_password  =  $_POST['con_password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $allowed = array(".", "-", "_");


    //name
        if ($username == "") {
            echo "Null submission... \n";
        } 
        else if(strlen($username)<2){
            echo "name must be atleast 2 char\n";
            
        }
        elseif( !ctype_alnum(str_replace($allowed, '', $username )) ){
            echo "name must contain alphanumeric char\n";
        }

        else{
            echo($username);
        }

    //password
    if(strlen($password)<8){
    echo " password must be 8 chars";
    }
    else if($password != $con_password){
        echo "password and confirm don't match \n"; 
    }
    else{
        echo"\npassword: $password";
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset style="width:320px">
            <legend>Registration</legend>
            <table>

                <tr height='30px'>
                    <td>Name:<br></td>
                    <td>
                        <input type="text" name="name" value="" />
                    </td>
                </tr>

                <tr height='30px'>
                    <td>Email: <br></td>

                    <td> <input type="email" name="email" value="" /> </td>
                </tr>

                <tr height='30px'>
                    <td>User Name<br></td>
                    <td>
                        <input type="text" name="username" value="">
                    </td>
                </tr>

                <tr height='30px'>
                    <td>
                        Password :

                    </td>
                    <td>
                        <input type="password" name="password" value=""> <br>
                    </td>
                </tr>

                <tr height='30px'>
                    <td>
                        Confirm Password : <br>
                    </td>
                    <td><input type="password" name="con_password" value=""></td>
                </tr>

                <tr height='30px'>
                    <td colspan="2">
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" value="Male"> Male
                            <input type="radio" name="gender" value="Female"> Female
                            <input type="radio" name="gender" value="Other"> Other
                        </fieldset>
                    </td>
                </tr>


                <tr>

                    <td colspan="2">
                        <fieldset>
                            <legend>Date of Birth</legend>
                            <input type="date" name="dob" value="" />
                    </td>

        </fieldset>
        </tr>


        <tr align="right">
            <td " height=" 50px">
                <input type="submit" name="submit" value="Submit">
                <input type="reset" name="click" value="reset">
            </td>
        </tr>
        </table>
        </fieldset>
    </form>
</body>

</html>