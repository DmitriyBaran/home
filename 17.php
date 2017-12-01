<?php
header('Content-type: text/html; charset=utf-8');
$month = 11;
$arr = array(1,2,3,4,5,6,7,8,9,10,11,12);

foreach ($arr as $k => $v)
{
    if ($v == $month)
        echo "<b>$v</b>";
    else
        {
        echo $v;
        }
}
?>