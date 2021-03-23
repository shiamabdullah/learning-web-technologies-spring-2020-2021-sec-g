<?php
    require ('../model/db.php');	
?>

<html>

	<a href="addproduct.html">Add Product</a> |
	<br>
	
	<h1>Display</h1>
	<table border="1">
        <tr>
			<td>ID</td>
			<td>Name</td>
			<td>Profit</td>
			<td>ACTION</td>
		</tr>
   <?php 
	$conn = getConnection();
	$sql = "select * from products";
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($result))
        {	if($row['displayable']==1){
			
			$profit= $row['selling_price']-$row['buying_price'];
           echo "<tr>
                    <td>{$row['id']} </td>
                    <td> {$row['name']} </td>         
                    <td> {$profit} </td>
					<td>
                        <a href=\"edit.php?id={$row['id']}\"> EDIT </a> |
                        <a href=\"../controller/delete.php?id={$row['id']}\"> DELETE </a>
                    </td>
                </tr>";
                
           echo "<br>";}}

    ?>
    </table>

    </html>
