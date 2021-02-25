<?php
session_start();
if (isset($_SESSION['flag'])) {
    
    $user = $_SESSION['current_user'];

    if(isset($_POST['submit'])){
        
        $cn 		=  $_POST['pass_cur'];
        
        $np 		=  $_POST['pass_new'];
        $rnp 		=  $_POST['re_pass_new'];
    
        if($cn===$user['password']){

            if($np != $cn and $np==$rnp ){
                echo "changed \n"; 
            }
           
            
            else{
                echo "validation error";
    
            }}
            else{
                echo"your password doesn't match the previous one";
            }
                
            }
    
    }

            

 else {
    header('location: home.html');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PROFILE PICTURE</title>



</head>

<body>

    <table width="60%" align="center" border="1">
        <thead>
            <tr>
                <th>
                    <img src="logo.png" height="50px">
                </th>


                <th align="right">
                    <h3>
                        logged in as <?php echo $user['username']; ?> |
                        <a href="logout.php">Logout</a>
                    </h3>

                </th>
            </tr>
        </thead>


        <tbody>
            <td width='300px'>
                <h3><u>Account</u></h3>
                <ul>
                    <li><a href="dashboard.php"> Dashboard</a></li>
                    <li><a href="viewprofile.php"> View Profile</a></li>
                    <li><a href="editprofile.php"> Edit Profile</a></li>
                    <li><a href="changephoto.php"> Change Profile Picture</a></li>
                    <li><a href="changepass.php"> Change Passowrd</a></li>
                    <li><a href="logout.php"> Logout </a></li>
                </ul>

            </td>

            <td align="center">

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

            </td>

        </tbody>

        <tfoot>
            <td colspan="2" align="center"> Copyright@2017 </td>
        </tfoot>

    </table>



</body>

</html>