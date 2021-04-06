<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<script type = "text/javascript">

function countWords(str) {
  return str.trim().split(/\s+/).length;
}
  function validateForm() {
	var name = document.forms["myForm"]["name"].value;
	if (name == "") {
		alert("Name cant be empty");
		name.focus();
		return false;
  				}
	window.console.log(WordCount(name));

  	elseif( WordCount(name)<1)
  	{
		alert("Must contain words");
		name.focus();
		return false;
  	}
}

</script>
<form name="myForm" onsubmit="return validateForm()" method="post">
		<fieldset>
			<legend>Sign Up</legend>
			<table>
                <tr >
                    <td>Name<br></td>
                    <td>
                        <input type="text" name="name" id="name" value=""/>
                    </td>
				
                </tr>
                <tr>
                    <td>User Name<br></td>
                    <td>
                        <input type="text" name="username" value="">
                    </td>
                </tr>
                <tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="repass" value=""></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
                <tr>
					<td>Date of Birth: </td>
					<td> <input type="date" name="dob" value="" /> </td>
                    <td > </td>
				</tr>
                <tr>
					<td>Address</td>
					<td><input type="address" name="address" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="submit"> 
						<a href="login.php">Login</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>

</body>
</html>
