<?php
header('Content-type: text/html; charset=utf-8');

$arr = array(2, 5, 9, 15, 0, 4);

foreach ($arr as $k => $v)
{
    if ($v > 3 & $v < 10)
        echo "$v <br>";
}
?>