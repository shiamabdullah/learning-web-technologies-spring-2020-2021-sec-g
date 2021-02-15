<?php

    for($i=1;$i<=3;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo"* ";
        }
        echo"\n";
    }

    for($i=1;$i<=3;$i++)
    {   $x=0;

        for($j=1;$j<=$i;$j++)
        {
            $x+=1;
            echo"$x ";
        }
        echo"\n";
    }
    
    for($i=1;$i<=3;$i++)
    {   $c="A";
        for($j=1;$j<=$i;$j++)
        {  
            echo"$c ";
            $c++;
        }
        echo"\n";
    }
?>