<?php
	$title = "User List Page";
	include('header.php');
    require ('../model/dbcon.php');	
?>
	<a href="home.php">Back</a> |
	<a href="../controller/logout.php">logout</a>	
	<br>
	
	<h1>User list</h1>
	<table border="1">
        <tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>ACTION</td>
		</tr>
    <?php $sql = "select * from user";
    	$result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

            echo 	"<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>
                        <a href=\"edit.php?id={$row['id']}\"> EDIT </a> |
                        <a href=\"../controller/delete.php?id={$row['id']}\"> DELETE </a>
                        </td>
                    </tr>";
        }
    ?>
    </table>

<?php
	include('footer.php');
?>