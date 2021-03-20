<?php ;
	require ('../model/dbcon.php');
	$id= $_GET['id'];

    

    UPDATE `user` SET `name` = 'abcd', `password` = 'abcd', `email` = 'abcd@gmail.com' WHERE `user`.`id` = 1;

?>