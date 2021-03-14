<?php 
    $title="Sign Up";
	include('header.php');
?>

<center>
<form method="post" action="../controller/regCheck.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text" name="userid" value=""> <br/>

					Password<br/><input type="password" name="pass"  value=""><br/>

					Confirm Password<br/><input type="password" name="repass"  value=""><br/>

					Name<br/><input type="text" name="name" value=""><br/>

					User Type<hr/>

					<input type="radio" name="usertype" <?php if (isset($usertype) && $usertype=="Admin")?> value="Admin">Admin
					<input type="radio" name="usertype" <?php if (isset($usertype) && $usertype=="User")?> value="User">User
					<hr/>

					<input type="submit" name="signup" value="Submit">
					<a href="login.php">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
		