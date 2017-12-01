<?
$cols=10;
$rows=10;
$td=1;
$tr=1;

echo "<table border='1'>" ;

while($tr<=$rows){
    echo "<tr>" ;
    while ($td<=$cols)
    {echo "<td>".$tr*$td."</td>";
        $td++;
    }
    echo "</tr>";
    $tr++ ;
}
echo "</table>" ;
?>