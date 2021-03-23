<?php
require_once('../model/productModel.php');

if(isset($_POST['submit'])){
        
    $name= $_POST['name'];
	$buying_price= $_POST['buying_price'];
	$selling_price= $_POST['selling_price'];
	$displayable= $_POST['displayable'];

   if(!($name == "" || $buying_price == "" || $selling_price == ""))
   {
        echo "yes";
        $product = [	
            'name'	=> $name, 
            'buying_price'	=> $buying_price, 
            'selling_price'		=>$selling_price, 
            'displayable'		=>$displayable
        ];
        print_r($product);
        $status = addProduct($product);				

				if($status){
					echo "added";
				}else{
					echo "error..try again";
				}
   }
   else{
       echo null;
   }
}
?>