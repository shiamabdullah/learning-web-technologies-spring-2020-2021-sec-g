<?php
    session_start();

    if(isset($_POST['signup'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $repass = $_POST['repass'];
        $email = $_POST['email'];

        if($username == ""  || $password == ""||  $email == ""){
            echo "null value found...";
        }else{
            if($password == $repass){

                $user = ['username'=> $username, 'password'=> $password, 'email'=>$email];

                //$_SESSION['current_user'] = $user;
				$file_name= $_SERVER['DOCUMENT_ROOT'].'/MID_LAB_TASK_JSON_08/user-mgt/model/users.json';

        
				if(filesize($file_name)==0){
       			$json=json_encode($user);
        		$myfile=fopen($file_name, 'w');
        		fwrite($myfile, '['.$json.']');
				}
				else{
						$inp = file_get_contents($file_name);
						$tempArray = json_decode($inp);
						array_push($tempArray, $user);
						$jsonData = json_encode($tempArray);
						file_put_contents($file_name, $jsonData);
				}



                header('location: ../view/login.html');
            }else{
                echo "password & confirm password mismatch...";
            }
        }
    }


?>