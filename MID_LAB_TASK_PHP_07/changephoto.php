<?php
session_start();
if (isset($_SESSION['flag'])) {
    $user = $_SESSION['current_user'];

    if (isset($_POST['upload']))
    {               
        $file_name= $_FILES['file']['name'];
        $file_type= $_FILES['file']['type'];
        $file_size= $_FILES['file']['size'];
        $file_tem_loc= $_FILES['file']['tmp_name'];
        
        if (empty($file_name) or empty($file_type) or empty($file_size) or empty($file_tem_loc)  ){
           echo "null";
        }
    
        else if ( ( strpos($file_type, 'jpeg')!== false or str_contains($file_type, 'png') or str_contains($file_type, 'jpg'))!=true )
        {
            echo'enter a valid img file  jpeg or jpg or png ';
        }
        else if ((floatval($file_size)/1000)>=4096)
        {
            echo 'file is greater than 4mb';
    
        }
    
        else{
            echo 'uploaded';
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

            <form action="#" method="POST"  enctype="multipart/form-data" >
                <fieldset>
                    <legend>PROFILE PICTURE</legend>
                        <table>
                        <tr>
                        <img src="USER.png" width="100" height="100">

                        </tr>
                    <tr>
                    <td>  
                            <input type="file" name="file">
                        </td>
                    </tr> 
                        <tr>
                            <td> <input type="submit" name="upload" value="Submit"> </td>
                        </tr>
                </table>        
            </fieldset>
                   

            </td>

        </tbody>

        <tfoot>
            <td colspan="2" align="center"> Copyright@2017 </td>
        </tfoot>

    </table>



</body>

</html>