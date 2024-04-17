<?php
     $num1 = 1;
     $num2 = 0;

     echo $num2 . "\n";
     echo $num1 . "\n";

     for ($i = 0; $i < 9; $i++) {
        $num1 = $num1 + $num2;
        $num2 = $num1 - $num2;
        echo $num1 . "\n";
     }
?>