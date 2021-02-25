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
    <title>HOME</title>

        <table width="100%" align="center">
            <tr>
            <th align="Left">
                <img src="logo.png" height="50px">
            </th>


            <th align="Right">
                        <h4>
                            <a href="Home.php"> Home</a> | 
                            <a href="Login.html" >Login</a> |
                            <a href="Registration.html"> Registration</a> 			
                        </h4>
                        
            </th>
            </tr>
        </table>

</head>

<body>
        
    <table width="100%">
                
            <td height='400px' align="left">
                   <h3> welcome <?php echo"$username" ; ?> </h3> 
            </td>        

    </table>
</body>

<footer>
  <center>Copyright@2017</center>  
</footer>
</html>