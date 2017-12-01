<?php
header('Content-type: text/html; charset=utf-8');
for ($i = 0; $i < 10; $i++ )
{
    $arr[$i] = rand(0,10);
}
foreach ($arr as $k => $v)
    echo "$v<br>";

    $mx = max($arr);
    $mn = min ($arr);
    echo 'Максимальное значение   ';
    echo $mx;
    echo "<br>";
    echo 'Минимальное значение  ';

    echo $mn;
    echo "<br>";
    $trans = array_flip ($arr);
    foreach ($trans as $tran)
    echo "$tran<br>";

?>