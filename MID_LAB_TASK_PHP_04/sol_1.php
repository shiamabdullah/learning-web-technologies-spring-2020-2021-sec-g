<?php
    function area($length,$width) {
    $a=$length*$width;
    echo "The area is "."$a";
  }
    function perimeter($length,$width) {
    $p=2*($length+$width);
    echo "\nThe perimeter is "."$p";
  }

  $length = readline('Enter length : '); 
  $width = readline('Enter width : '); 
  area($length,$width);
  perimeter($length,$width)
?>