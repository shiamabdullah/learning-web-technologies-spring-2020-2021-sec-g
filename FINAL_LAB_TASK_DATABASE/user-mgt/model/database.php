<?php 
$conn	= mysqli_connect('localhost', 'root', '', 'users');

if($conn){
    echo "success";
}else{
    die('DB connection error...');
}

?>