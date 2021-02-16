<?php 

if (isset($_POST['submit'])){
    $gender= $_POST['gender'];

    if($gender==""){
        echo "Null submission----- ";
    }else
    {
        echo "Success <br> $gender" ;
         }
}
else{
    echo "Invalid Request-----";
}

?>