<?php
    session_start();
    $file_name= $_SERVER['DOCUMENT_ROOT'].'/MID_LAB_TASK_JSON_08/user-mgt/model/users.json';
    $myfile = fopen($file_name, "r");
    $data = fread($myfile, filesize($file_name));

    $users = json_decode($data, true);
    //Array ( [0] => Array ( [username] => abcd [password] => 1234 [email] => shiamabdullah1@gmail.com ) 
    //[1] => Array ( [username] => abc [password] => 123 [email] => shiamabdullah1@gmail.com )

       
    foreach ($users as $id=>$user)
    {
      echo $id;

      echo "<br>";

      foreach ($user as $type=>$value){
          echo" $type $value";
          echo "<br>";

        //   if($type=="username"){
        //       echo $value;
        //   }


         // foreach ($type as $type=>$value)
      }

    }

    
           
        
    
        
    


//     $file_name= $_SERVER['DOCUMENT_ROOT'].'/MID_LAB_TASK_JSON_08/user-mgt/model/user.json';
//     $myfile = fopen($file_name, "r");
//     $data = fread($myfile, filesize($file_name));

//     $user1 = json_decode($data, true);
//    print_r($user1);

    
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>User list</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>EMAIL</td>
        <td>ACTION</td>
    </tr>
    
</table>
</body>
</html>