<?php
session_start();
if (isset($_SESSION['flag'])) {
    $user = $_SESSION['current_user'];

    if (isset($_POST['submit']))
    {               
            unset($user['name']);
            $user['name'] = $_POST['name'];
            $user['email'] = $_POST['email'];
            $user['gender'] = $_POST['gender'];
            $user['dob'] = $_POST['dob'];
            print_r($user);

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
    <title>EDIT PROFILE</title>



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

                    <fieldset style="width:70%">
                        <legend>PROFILE </legend>
                        <table>
                            <tr>
                                <td>Name<br></td>
                                <td>:<input type="text" name="name" value="" /> </td>
                            <tr>
                            <tr>

                                <td>Email <br></td>

                                <td> :<input type="email" name="email" value="" /> </td>
                            </tr>


                            <tr>

                                <td>Gender<br></td>

                                <td>

                                    <input type="radio" name="gender" value="male"> male
                                    <input type="radio" name="gender" value="female"> female
                                    <input type="radio" name="gender" value="other"> other

                                </td>
                            </tr>

                            <tr>

                                <td>Date of Birth<br></td>

                                <td>
                                <input type="date" name="dob" value="" />
                                </td>
                            </tr>







                            <td " height=" 50px">
                                <input type="submit" name="submit" value="Submit">
                            </td>

                            </tr>



                        </table>


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