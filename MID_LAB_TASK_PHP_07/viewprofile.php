<?php 
session_start();
if(isset($_SESSION['flag'])){
    $user = $_SESSION['current_user'];

}
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW PROFILE</title>

       

</head>

<body>

    <table width="60%" align="center" border="1">
                <thead>
                    <tr>
                    <th >
                        <img src="logo.png" height="50px">
                    </th>
                    
                    
                    <th align="right">
                                <h3>
                                    logged in as <?php echo $user['username']; ?> | 
                                    <a href="logout.php" >Logout</a> 
                                </h3>
                                
                    </th>
                    </tr>
                </thead>
        
          
            <tbody>
                <td width='300px' >
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
            
                <td align="center" >
                       
                    <fieldset style="width:70%">
                        <legend>PROFILE </legend>
                        <table>
                            <tr>
                                <td>Name<br></td>
                                <td>:<?php echo $user['username']; ?></td>
                                
                                <td rowspan="3" ><img src="user.png" width="100" height="100"></td>

                                
                            <tr>
                            <td>Email<br></td>
                                <td>:<?php echo $user['email']; ?></td>
                            </tr>    
                               
                                
                               <tr>
                                    <td>Gender<br></td>
                                    <td>:<?php echo $user['gender']; ?></td>
                               </tr>
                                
                             <tr>
                                    <td>Dob<br></td>
                                    <td>:<?php echo $user['dob']; ?></td>
                                    
                                    <td> <a href="changepic.php" >Change</a> </td>
                             </tr>
                             
    
                            

                            
                        </table>
                        
                         <a href="editprofile.php"> Edit Profile</a>
                        
                    </fieldset>
                
                </td>
                
            </tbody>
           
           <tfoot>
                <td colspan="2" align="center"> Copyright@2017 </td> 
            </tfoot>

            </table>



</body>

</html>