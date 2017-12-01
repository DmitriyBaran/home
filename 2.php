<?php

$Num = array(1, 20, 15, 17, 24, 35);


 foreach ($Num as $k => $v)
 {
     echo "\$Num[$k] = $v<br>";
 }
 $result = 0;
 foreach ($Num as $v)
 {
     $result += $v;
 }
    echo "Summa $result";
?>