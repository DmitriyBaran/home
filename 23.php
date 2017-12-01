    <form action="" method="get">
        <input type="number" name = n1>
        <input type="submit" name=submit>
        <input type="reset" name=reset>
    </form>
<?php
//header('Content-type: text/html; charset=utf-8');
//$var = 12345;
echo  array_sum(str_split($_GET['n1']));
?>