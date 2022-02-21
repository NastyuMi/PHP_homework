<?php
if (!empty($_POST) && $_POST["form"]==1 && $_POST["num_1"]!=null && $_POST["num_2"]!=null)
{
    $int1 = $_POST["num_1"];
    $int2 = $_POST["num_2"];
    echo $int1, "+", $int2, "=", $int1+$int2;
    echo '<br>';
    echo $int1, "-", $int2, "=", $int1-$int2;
    echo '<br>';
    echo $int1, "*", $int2, "=", $int1*$int2;
    echo '<br>';
    echo $int1, "/", $int2, "=", $int1/$int2;
    echo '<br>';
    echo $int1, "%", $int2, "=", $int1%$int2;
}
