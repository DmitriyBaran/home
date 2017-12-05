<?php
header('Content-type: text/html; charset=utf-8');
$n = 1000;
$num = 0;
for($n=1000;$n>50;$n/=2){
    $num++;
    echo "$n<br>";
}
echo "Количество итераций $num";
echo "<br>";
echo $n;
?>
