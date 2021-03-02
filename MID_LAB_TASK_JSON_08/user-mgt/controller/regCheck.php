<?php
	session_start();

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
				
				$json = json_encode($user);
				echo $json;
				$file_name= $_SERVER['DOCUMENT_ROOT'].'/MID_LAB_TASK_JSON_08/user-mgt/model/user.json';
				$myfile = fopen($_SERVER['DOCUMENT_ROOT'].'/MID_LAB_TASK_JSON_08/user-mgt/model/user.json', "w");
				$myfile = fopen($file_name, "w");
				fwrite($myfile, $json);
				fclose($myfile);

				$myfile = fopen($file_name, "r");
				$data = fread($myfile, filesize($file_name));
				print_r($data);


				header('location: ../view/login.html');
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>