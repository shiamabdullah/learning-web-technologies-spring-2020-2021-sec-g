<?php
    function check($n1,$n2,$n3) {
        echo "Largest Number is :";
        if($n1>$n2 )
        {
            if($n1>$n3)
            {
                echo" $n1";
            }
            else
            {
                echo" $n3";
            }
        }
        else
        {
            if($n2>$n3)
            {
                echo" $n2";
            }
            else
            {
                echo" $n3";
            }
        }
  }

  $n1 = readline("Enter 1st number "); 
  $n2 = readline("Enter 2nd number "); 
  $n3 = readline("Enter 3rd number "); 

  check($n1,$n2,$n3);
?>