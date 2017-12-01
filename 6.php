<?php
header('Content-type: text/html; charset=utf-8');
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $k => $v)
{
    $ru[] = [$v];
    $en[] = [$k];
}
    print_r($ru);
    echo "<br>";
    print_r($en);
?>