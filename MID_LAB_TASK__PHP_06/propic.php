<?php
if (isset($_POST['upload']))
{   
    //print_r($_FILES['file']) ;
    $file_name= $_FILES['file']['name'];
    $file_type= $_FILES['file']['type'];
    $file_size= $_FILES['file']['size'];
    $file_tem_loc= $_FILES['file']['tmp_name'];
    
    if (empty($file_name) or empty($file_type) or empty($file_size) or empty($file_tem_loc)  ){
       echo "null";
    }

    else if ( ( strpos($file_type, 'jpeg')!== false or str_contains($file_type, 'png') or str_contains($file_type, 'jpg'))!=true )
    {
        echo'enter a valid img file  jpeg or jpg or png ';
    }
    else if ((floatval($file_size)/1000)>=4096)
    {
        echo 'file is greater than 4mb';

    }

    else{
        echo 'uploaded';
    }    
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pp</title>
</head>
<body>
    <form action="#" method="POST"  enctype="multipart/form-data" >
        <fieldset>
            <legend>PROFILE PICTURE</legend>
                <table>

                <tr>
                <img src="pp.png" width="100" height="100">

                </tr>
               <tr>
               <td>  
                    <input type="file" name="file">
                </td>
               </tr> 
                <tr>
                    <td> <input type="submit" name="upload" value="Submit"> </td>
                </tr>
        </table>        
    </fieldset>

        
    </form>
    
</body>
</html>