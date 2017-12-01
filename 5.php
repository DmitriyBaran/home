<?php
header('Content-type: text/html; charset=utf-8');
$arr = array(200 => 'Коля', 300 => 'Вася', 400=> 'Петя');

foreach ($arr as $k => $v )
{

    echo "$v - зарплата $k долларов <br>";
}

?>