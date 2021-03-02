<?php

	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$file_name= $_SERVER['DOCUMENT_ROOT'].'/MID_LAB_TASK_JSON_08/user-mgt/model/user.json';
		$myfile = fopen($file_name, "r");
		$data = fread($myfile, filesize($file_name));

		$user = json_decode($data, true);


		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			$user = $_SESSION['current_user'];

			if($user['username'] == $username && $user['password'] == $password){
				$_SESSION['flag'] = true;
				
				header('location: ../view/home.php');
			}else{
				echo "invalid user...";
			}
		}
	}


?>