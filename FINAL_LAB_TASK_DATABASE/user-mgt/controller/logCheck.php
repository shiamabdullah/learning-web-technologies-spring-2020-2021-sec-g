<?php
	require ('../model/dbcon.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}	
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// $file_name= $_SERVER['DOCUMENT_ROOT'].'/MID_LAB_TASK_JSON_08/user-mgt/model/user.json';
		// $myfile = fopen($file_name, "r");
		// $data = fread($myfile, filesize($file_name));
		// $user = json_decode($data, true);

		if($username == "" || $password == ""){
			echo "null input...";
		}
		else{

			$sql= "SELECT * FROM `user` WHERE `name` LIKE '$username' AND `password` LIKE '$password'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_num_rows($result);
			
			print_r($userdata);
			//echo ($userdata['id']);
			//$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
			//$_SESSION['current_user'] = $user;

			//print_r($row);
			if($row=='1'){
				//$user = ['userid'=> $userdata['id'],'username'=> $userdata['name'], 'password'=>  $userdata['password'], 'email'=> $userdata['email'] ];
				$userdata = mysqli_fetch_assoc($result);
				$_SESSION['current_user'] = $userdata;
				$_SESSION['flag'] = true;
				print_r($_SESSION['current_user']);
				header('location: ../view/home.php');
			}
			else{
				echo 'invalid user';
			}
			
		}
	}


?>