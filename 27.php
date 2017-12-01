<?php
header('Content-type: text/html; charset=utf-8');
$col = 5;
$row = 5;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
    echo '<table border="0">';
        for ($k = 1; $k <= $col; $k++)
            {
                echo '<tr>';
                    for ($j = 1; $j <= $row; $j++)
                        {
                            $ran = rand();
                            $i=$colors[rand(0,count($colors)-1)];
                            echo "<td style='background-color: {$i}'>". $ran.  '</td>';
                        }
                        echo '</tr>';
            }
    echo '</table>';
?>