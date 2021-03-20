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
        echo $id;

    }

?>