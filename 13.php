<?php
header('Content-type: text/html; charset=utf-8');
$cols=10;
$rows=10;
echo '<table border="1">';
for ($i = 1; $i <= $cols; $i++)
    {
        echo '<tr>';
        for ($j = 1; $j <= $rows; $j++)
        {
            echo '<td>'. $i*$j. '</td>';
        }
        echo '</tr>';
    }
echo '</table>';
?>