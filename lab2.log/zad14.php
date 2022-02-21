<?php
if (!empty($_POST) && $_POST["form"]==14 && $_POST["num"]!=null)
{
    $num = $_POST["num"];
    echo '<table border="1" bordercolor="darkred" width="900px">';
    echo '<tr><td>';
    for ($i = 1; $i <= 10; $i++)
    {
        echo $num. "*". $i. "= ". $i*$num;
        echo '<br>';

    }
    echo '</td>';
    echo '<td>';
    echo '<table border="1" width=100%>';
    echo '<tr>';
    for($i = 1; $i<=9; $i++) {
        echo "<td align=center>";
        for ($j = 1; $j <= 9; $j++)
        {
            echo "$i * $j = ".$i*$j."&nbsp;&nbsp;&nbsp;&nbsp;";
            echo '<br>';
        }
        echo "</td>";
    }
    echo '</tr>';
    echo '</table>';
    echo '</td></tr>';
    echo '</table>';

}
