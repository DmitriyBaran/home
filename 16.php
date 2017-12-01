<?php
header('Content-type: text/html; charset=utf-8');
$cols=3;
$rows=3;
echo '<table border="0">';
for ($i = 1; $i <= $cols; $i++)
{
    echo '<tr>';
    for ($j = 1; $j <= $rows; $j++)
    {
        echo '<td>'. $i++. ",".'</td>';
    }
    echo '</tr>';

    echo '<tr>';
    for ($j = 1; $j <= $rows; $j++)
    {
        echo '<td>'. $i++. ",".'</td>';
    }
    echo '</tr>';

    echo '<tr>';
    for ($j = 1; $j <= $rows; $j++)
    {
        echo '<td>'.  $i++. ",".'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>