<?php
  $elements =[1,2,3,4,'22s','sadc','xyz'];
  $n1 = readline("Enter the element you wanna find "); 

  foreach ($elements as $value) {
    if($value==$n1) {
        echo "Element Matched";
        break;
    }
  }
?>