
<!DOCTYPE html>
<html>
<head>
	<title>Gender Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
            	<legend>GENDER</legend>
				<input type="radio"  name="gender" value="male" <?php if(isset($_POST['submit'])){echo 'Checked';}?> > Male       
				<input type="radio"  name="gender" value="female" <?php if(isset($_POST['submit'])){echo 'Checked';}?> > Female                
				<input type="radio"  name="gender" value="others" <?php if(isset($_POST['submit'])){echo 'Checked';}?> > Others                
				<input type="submit" name="submit" value="Submit">

        </fieldset>

	</form>
</body>
</html>