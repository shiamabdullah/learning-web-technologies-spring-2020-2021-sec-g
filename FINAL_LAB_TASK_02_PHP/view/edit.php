<?php
	require_once('../model/db.php');
	$id= $_GET['id'];
    echo $id;
    $conn = getConnection();
	$sql = "SELECT * FROM `products` WHERE `id` = {$id} " ;
	$result = mysqli_query($conn, $sql);
	$product_data = mysqli_fetch_assoc($result);

?>
<html>
<form method="post" action="../controller/editcheck.php?id=<?php echo $id; ?>">
		<fieldset>
			<legend>EDIT Product</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo $product_data['name']; ?>"></td>
				</tr>
				<tr>
					<td>Buying price</td>
					<td><input type="text" name="buying_price" value="<?php echo $product_data['buying_price']; ?>"></td>
				</tr>
				
				<tr>
					<td>Selling_price</td>
					<td><input type="text" name="selling_price" value="<?php echo $product_data['selling_price']; ?>"></td>
				</tr>
                <tr>
                <td> Display </td>
                <td>
                    <input type="checkbox" name="displayable"  value="<?php echo $product_data['displayable']; ?>"></td>
                </tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="edit" value="Update"> 
						<a href="display_product.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</html>
	
