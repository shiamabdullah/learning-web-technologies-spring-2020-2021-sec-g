<?php 
    $title="User Home";
	include('header.php');
?>
<html>
<center>
	<form>
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" /><br />
						New Password<br />
						<input type="password" /><br />
						Retype New Password<br />
						<input type="password"/>								
						<hr />
						<input type="button" value="Change" />     
						<a href="index.html">Home</a>						
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