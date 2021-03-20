<?php
	session_start();
	require ('../model/dbcon.php');
	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $password == "" || $email == ""){
			echo "null value found...";
		}else{
			if($password == $repass){

				$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
				$_SESSION['current_user'] = $user;

				$sql= "INSERT INTO `user` (`id`, `name`, `password`, `email`) VALUES ('NULL', '$username', '$password', '$email')";
				$result = mysqli_query($conn, $sql);
				echo $result;					
				if($result== '1'){
				header('location: ../view/login.html');
				}
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>