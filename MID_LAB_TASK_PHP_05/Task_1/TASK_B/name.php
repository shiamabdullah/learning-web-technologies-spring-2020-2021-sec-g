<?php

	if(isset($_POST['submit'])){

		$name 		=  $_POST['myname'];

		if($name == ""){
			echo "Null submission...";
		}else{
			echo $name;
			echo "<br>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>NAME</legend>
			<input type="text" name="myname" value=""> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>