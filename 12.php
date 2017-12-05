<?php
header('Content-type: text/html; charset=utf-8');
$num = 1000;
for($num=1000;$num>50;$num/=2){
    $num++;
    echo "$n<br>";
}
echo "Количество итераций $num";
echo "<br>";
echo $n;

?>
