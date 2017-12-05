<?php
header('Content-type: text/html; charset=utf-8');
$arr = array(1,2,3,4,5,6,7,8,9);
    foreach ($arr as $a) {
        if ($a % 3 == 0)
            echo $a . '<br>';
        else
            echo $a .",";
    }
?>
