<?php ;
	require ('../model/dbcon.php');
	// $id= $_GET['id'];
	// $sql= "SELECT `id`, `name`, `password`, `email` FROM `user` WHERE `id`=$id";
	// $result = mysqli_query($conn, $sql);
	// $userdata = mysqli_fetch_assoc($result);
	// print_r($userdata);

    if(isset($_POST['edit'])){
        $username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

        $id= $_GET['id'];
        $sql="UPDATE `user` SET `name` = '$username', `password` = '$password', `email` = '$email' WHERE `user`.`id` =  $id;";
        $result = mysqli_query($conn, $sql);
        if ($result=1){
            echo "updated <br>";
        echo    " <a href=\"../view/user_list.php\"> View Updated list </a> "; }
    }

?>