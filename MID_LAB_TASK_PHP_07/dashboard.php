<?php 
session_start();
if(isset($_SESSION['flag'])){
    $username = $_SESSION['current_user']['username'];

}
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>

        <table width="100%" align="center">
            <tr>
            <th align="Left">
                <img src="logo.png" height="50px">
            </th>


            <th align="Right">
                        <h3>
                            logged in as <?php echo"$username" ; ?> | 
                            <a href="logout.php" >Logout</a> |
                        </h3>
                        
            </th>
            </tr>
        </table>

</head>

<body>
        
    <table width="100%">
                
            <tr>
                <td align="left">
                <h3>Account</h3>
                    <ul>
                        <li><a href="dashboard.php"> Dashboard</a></li>
                        <li><a href="view.php"> View Profile</a></li>
                        <li><a href="editprofile.html"> Edit Profile</a></li>
                        <li><a href="changephoto.html"> Change Profile Picture</a></li>
                        <li><a href="changepass.html"> Change Passowrd</a></li>
                        <li><a href="logout.html"> Logout </a></li>
                    </ul>

                </td>

                <td align="left">
                       <h3> welcome <?php echo"$username" ; ?> </h3> 
                

                </td>
                
            </tr>



    </table>
</body>

<footer>
  <center> <br> <br> Copyright@2017</center>  
</footer>
</html>