<?php
if (!empty($_POST) && $_POST["form"]==2 && $_POST["num_1"]!=null && $_POST["num_2"]!=null)
{
    $int1 = $_POST["num_1"];
    $int2 = $_POST["num_2"];
    if ($int1<$int2)
    {
        echo $int1, "<", $int2;
    }
    else if ($int1>$int2)
    {
        echo $int1, ">", $int2;
    }
    else
    {
        echo $int1, "=", $int2;
    }

}
