<?php
header('Content-type: text/html; charset=utf-8');

for ($i = 1; $i < 10; $i++)
{
    for($j=0; $j<$i;  $j++){
        $str=$i;
        echo$str;
    }
    echo'<br>';
}
?>