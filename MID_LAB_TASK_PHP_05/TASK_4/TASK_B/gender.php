<?php

	if(isset($_POST['submit'])){

		$input =  $_POST['gender'];

		if($input == ""){
			echo "Null submission...";
		}else{
			echo $input;
			echo "<br>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>GENDER Input field</title>
</head>
<body>
<form method="POST" action="#">
        <fieldset>
            <legend>GENDER</legend>
                <input type="radio"  name="gender" value="Male" > Male 
                <input type="radio"  name="gender" value="Female"> Female 
                <input type="radio"  name="gender" value="Other"> Other   <br>
                <input type="submit" name="submit" value="Submit">
        </fieldset>


    </form>
</body>
</html>