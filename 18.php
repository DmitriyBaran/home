<?php
header('Content-type: text/html; charset=utf-8');
 $arr = array(1 => 'Monday', 2 => 'Tuesday',3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday');
 foreach ($arr as $k => $v)
     if ($k == 6 or $k == 7)
         echo "<b> $v </b> <br>";

        else
        {
            echo $v;
            echo "<br>";
        }
?>