<?php
if (!empty($_POST) && $_POST["form"]==13 && $_POST["num_1"]!=null && $_POST["num_2"]!=null)
{
    $int1 = $_POST["num_1"];
    $int2 = $_POST["num_2"];
    $i=1;
    while ($int1<$int2)
    {
        echo $i,"час: ", $int1, "*", 2, "=", $int1*2;
        echo '<br>';
        $int1=$int1*2;
        $i++;
        if($int1*2 > $int2)
            break;
    }
}