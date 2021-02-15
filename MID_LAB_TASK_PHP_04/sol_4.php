<?php
    function check($num) {
    if($num%2=='0')
    echo "The number is Even";
    else
    echo "The number is Odd";
  }

  $num = readline("Enter number to check : "); 
  check($num)
?>