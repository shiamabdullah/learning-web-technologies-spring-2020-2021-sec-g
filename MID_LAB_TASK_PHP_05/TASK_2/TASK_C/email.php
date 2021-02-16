
<!DOCTYPE html>
<html>
<head>
	<title>EMAIL Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>EMAIL</legend>
				<input type="email" name="myemail" value="<?php if(isset($_POST['myemail'])){echo $_POST['myemail'];}?>"> <br>
                <input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</html>