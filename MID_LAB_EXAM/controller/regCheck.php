<?php
	session_start();

	if(isset($_POST['signup'])){
        
        
        $userid = $_POST['userid'];
        $password = $_POST['pass'];
        $repass = $_POST['repass'];

		$username = $_POST['name'];
		$usertype = $_POST['usertype'];
		
        $allowed = array(".", "-", "_");

        echo " $userid , $username, $password,  $repass, $usertype";


		if($userid == "" || $password == "" || $repass == ""|| $username == "" || $usertype == ""  ){
			echo "null value found...";
		}else{
            if(strlen($username)<2){
                echo "name must be atleast 2 char\n";

            }
           
            if(strlen($userid)<2){
                echo "name must be atleast 2 char\n";

            }
            elseif( !ctype_alnum(str_replace($allowed, '', $userid )) ){
                echo "name must contain alphanumeric char\n";
            }

            else if(strlen($password)<8){
                echo " password must be 8 chars";
                }

			else if($password != $repass){

				echo "password & confirm password mismatch...";
			}else{
				
                $user = [ 'userid'=> $userid, 'password'=> $password, 'username'=> $username, 'usertype'=>$usertype];
                print_r($user);
                $file_name='../model/user.json';

        
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
                header('location: ../view/login.php');
    
			}
		}


	}


?>