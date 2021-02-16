<?php 

if (isset($_POST['submit'])){
    $input= $_POST['dob'];

    if($input==""){
        echo "Null submission----- ";
    }else
    {
        echo "Success <br> $input";  }
}
else{
    echo "Invalid Request-----";
}

?>