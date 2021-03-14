<?php 
    $title="Sign Up";
	include('header.php');
?>
<html>
<center>
<form method="post" action="../controller/logCheck.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text" name="userid" value=""> <br/>                           
					Password<br/>
					<input type="password" name="pass"  value="">
					<br /><hr/>
					<input type="submit" name="submit" value="Login"> 
					<a href="registration.php">Register</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</html>
<?php 
include('footer.php');
 ?>