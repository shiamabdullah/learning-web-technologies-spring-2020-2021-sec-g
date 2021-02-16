<?php

	if(isset($_POST['submit'])){

		$dob =  $_POST['mydob'];

		if($dob == ""){
			echo "Null submission...";
		}else{
			echo $dob;
			echo "<br>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Date Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>DATE OF BIRTH</legend>
				<input type="date" name="mydob" value=""> <br>
                <input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>