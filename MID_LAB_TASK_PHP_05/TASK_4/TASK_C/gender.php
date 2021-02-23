<?php 
echo $_POST['gender'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gender Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
            	<legend>GENDER</legend>
				<input type="radio"  name="gender" id='male' value=" <?php if(isset($_POST['id'])){echo 'Checked';}?> " > Male       
				<input type="radio"  name="gender" id2='female' value="<?php if(isset($_POST['id2'])){echo 'Checked';}?>" > Female                
				<input type="radio"  name="gender" id3="others" value="<?php if(isset($_POST['id3'])){echo 'Checked';}?>" > Others                
				<input type="submit" name="submit" value="Submit">

        </fieldset>

	</form>
</body>
</html>