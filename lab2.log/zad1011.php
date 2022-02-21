<?php
if (!empty($_POST) && $_POST["form"]==1011 && $_POST["num_1"]!=null && $_POST["num_2"]!=null)
{
    $int1 = $_POST["num_1"];
    $int2 = $_POST["num_2"];
    if ($int1>$int2)
    {
        $p=$int1;
        $int1=$int2;
        $int2=$p;
    }
    for ($i = $int1; $i <= $int2; $i++)
    {
        if($i == 0)
            break;
        echo "10 / $i = ". 10/$i."&nbsp;&nbsp;&nbsp;&nbsp;";
        echo '<br>';
    }
}