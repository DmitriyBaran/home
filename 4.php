<?php
header('Content-type: text/html; charset=utf-8');
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $k => $v)
{
    echo "$k => $v <br>";
}
?>