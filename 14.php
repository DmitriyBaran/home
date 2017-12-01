<?php
header('Content-type: text/html; charset=utf-8');
$arr = array(4, 2, 5, 19, 13, 0, 10);

foreach ($arr as $e)
{
    if ($e = 2 or $e = 3 or $e = 4)
        echo 'Есть';
    else
        echo 'Нет!';
}
?>