<?php 
	require ('../model/dbcon.php');
    $id= $_GET['id'];
    $sql= "DELETE FROM `user` WHERE `user`.`id` ='$id' ";
    $result = mysqli_query($conn, $sql);
    if ($result){
    echo "Record delted from database";
    echo    " <a href=\"../view/user_list.php\"> View Updated list </a> "; 

    }else{
        echo "Record Couldn't be deleted";
    
    }
?>