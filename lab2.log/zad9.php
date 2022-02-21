
<?php
if (!empty($_POST) && $_POST["form"]==9 && $_POST["num"]!=null) {
    $num = $_POST["num"];
    $col=array("red", "orange", "yellow", "green", "blue", "navy", "purple", "fuchsia", "lightpink", "grey", "black");
    for ($i = 1; $i <= 10; $i++)
    {
        $c=$col[$i];
        echo "<div style= 'color: $c'>";
        echo $num. "*". $i. "= ". $i*$num;
        echo '</div>';
    }
}
