<?php
	$title = "Edit Page";
	include('header.php');
	
	$userdata = getUserbyId($_GET['id']);
?>

	<form method="post" action="../controller/update.php">
		<fieldset>
			<legend>EDIT User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="alamin"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="123"></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="alamin@aiub.edu"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="edit" value="Update"> 
						<a href="user_list.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
	include('footer.php');
?>