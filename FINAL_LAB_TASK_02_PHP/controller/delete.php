<?php 
	require ('../model/db.php');
    $conn = getConnection();

    $id= $_GET['id'];
    $sql= "DELETE FROM `products` WHERE `product`.`id` ='$id' ";
    $result = mysqli_query($conn, $sql);
    if ($result){
    echo "Record delted from database";
    echo    " <a href=\"../view/displayproduct.php\"> View Updated list </a> "; 

    }else{
        echo "Record Couldn't be deleted";
    
    }
?>