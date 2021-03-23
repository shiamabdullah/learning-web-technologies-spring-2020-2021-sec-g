<?php
	
require_once('db.php');
$conn = getConnection();
$query="select * from products";
        $result= mysqli_query($conn,$query);

function addProduct($product){
	$conn = getConnection();
	$name= $product['name'];
	$buying_price= $product['buying_price'];
	$selling_price= $product['selling_price'];
	$displayable= $product['displayable'];

	$sql = "INSERT INTO `products` (`id`, `name`, `buying_price`, `selling_price`, `displayable`) VALUES (NULL, '{$name}', '{$buying_price}', '{$selling_price}', '{$displayable}');";
	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}
function getAllProducts(){

	$conn = getConnection();
	$sql = "select * from products";
	$result = mysqli_query($conn, $sql);
	$products = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($products, $row);
	}
	return $products;
}


?>