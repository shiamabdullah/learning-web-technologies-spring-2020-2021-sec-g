<?php
    function vat($a) {
    $v=$a*.15;
    echo "The vat for "."$a" ."tk is " ."$v"."tk";
  }

  $amount = readline('Enter amount : '); 
  vat($amount)
?>