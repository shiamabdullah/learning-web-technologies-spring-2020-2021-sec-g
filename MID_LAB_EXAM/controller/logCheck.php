<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}	
	if(isset($_POST['submit'])){

		$userid = $_POST['userid'];
		$password = $_POST['pass'];

        	
		$file_name='../model/user.json';
        $myfile = fopen($file_name, "r");
		$data = fread($myfile, filesize($file_name));
		$user = json_decode($data, true);

		if($userid == "" || $password == ""){
			echo "null input...";
		}else{

			$key = array_search($userid, array_column($user, 'userid'));
            if ($user[$key]['usertype']=='Admin'){
                if($user[$key]['password']==$password){
                    $_SESSION['flag'] = true;
                    //echo $user[$key]['password'];
                    $_SESSION['current_user'] = $user[$key];
                    echo $user[$key]['usertype'];
                    header('location: ../view/admin_home.php');
                }
                else{
                    echo "invalid user...";
                }
            }
            elseif($user[$key]['usertype']=='User'){
                if($user[$key]['password']==$password){
                    $_SESSION['flag'] = true;
                    //echo $user[$key]['password'];
                    $_SESSION['current_user'] = $user[$key];
                    echo $user[$key]['usertype'];
                    header('location: ../view/user_home.php');
                }
                else{
                    echo "invalid user...";
                }
            }
			else{
				echo "invalid user...";
			}
		}
	}


?>