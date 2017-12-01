<?php
$mass = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($mass as $k => $v)
{
    echo "$[k] = $v <br>";
}
$sum = 0;
foreach ($mass as $v)
{
    $v1 = pow($v,2);
    $result += $v1;
}
echo "Summa kvadratov $result";

?>