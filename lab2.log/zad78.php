<?php
if (!empty($_POST) && $_POST["form"]==78 && $_POST["num_1"]!=null ) {
    $num = $_POST["num_1"];
    if ( preg_match('/^\+?\d+$/', $num))
    {
        if($num == 3)
            echo "ВЕРНО!";
        else
        {
            echo "Число - не вeрное";
            echo '<br>';
            echo "Попробуйте еще раз!";
            echo '<br>';
            if ($num<3)
                echo "Загаданное число больше";
            else
                echo "Загаданное число меньше";
        }

    }
    else
        echo "Вы ввели не целое число, попробуйте еще раз.";
}
