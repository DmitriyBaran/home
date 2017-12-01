<?php
header('Content-type: text/html; charset=utf-8');
for ($i = 0; $i < 10; $i++)
{
    $Arr[$i] = rand (0,100);
}
print_r($Arr);
echo "<br>";
$par = 1;
$nep = 1;
    foreach ($Arr as $arrayElement)
        {
                echo $arrayElement;
                echo "<br>";
        }
        for ($i=0;$i<10;$i=$i+2)
        {
            if ($Arr[$i] > 0)
                $par = $par * $Arr[$i];
        }
        echo "Произведение элементов с парными индексами: ". $par . "<br>";

        for ($i=1;$i<10;$i=$i+2)
        {
            if ($Arr[$i] > 0)
                $nep = $nep * $Arr[$i];
        }
        echo "Произведение элементов с непарными индексами: ". $nep . "<br>";

?>

