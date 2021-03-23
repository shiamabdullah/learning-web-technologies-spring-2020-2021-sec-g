<?php ;
	require_once('../model/db.php');
    $conn = getConnection();


    if(isset($_POST['edit'])){
        $name = $_POST['name'];
		$buying_price = $_POST['buying_price'];
		$selling_price = $_POST['selling_price'];
		$displayable = $_POST['displayable'];

        $id= $_GET['id'];
        $sql="UPDATE `products` SET `name` = '$name', `buying_price` = '$buying_price', `selling_price` = '$selling_price',`displayable` = '$displayable' WHERE `id` =  $id;";
        $result = mysqli_query($conn, $sql);
        if ($result=1){
            echo "updated <br>";
        echo    " <a href=\"../view/displayproduct.php\"> View Updated list </a> "; }
    }

?>