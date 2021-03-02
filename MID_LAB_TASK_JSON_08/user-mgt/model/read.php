<?php
    //session_start();
    $myfile = fopen('../model/users.json', "r");
    $data = fread($myfile, filesize('../model/users.json'));

    $users = json_decode($data, true);
    //Array ( [0] => Array ( [username] => abcd [password] => 1234 [email] => shiamabdullah1@gmail.com ) 
    //[1] => Array ( [username] => abc [password] => 123 [email] => shiamabdullah1@gmail.com )
    ?>     

 <html>
<body>
<table border="1">
        <tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>ACTION</td>
		</tr>
    <?php 
    foreach ($users as $id=>$user)
    {   echo "<tr>";

        echo "<td>  $id </td>";

     foreach ($user as $type=>$value){
        if ($type=='username'){
            echo "<td>";
            echo "$value";
        }
        echo "</td>";

        if ($type=='email'){
            echo "<td>";
            echo "$value";
        }
        echo "</td>";

     }

     echo "<td>";
     echo "<a href=\"edit.php?id=$id\">";
     echo" Edit </a>";

     echo "<a href=\"delete.php?id=$id\">";
     echo" Delete </a>";
     echo "</td>";

     echo "</tr>";

    }

    echo sizeof($users);

    

     ?>
 </table>
 </body>

  </html>


    
           
    
        
    

