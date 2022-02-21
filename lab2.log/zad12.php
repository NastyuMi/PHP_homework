<?php
if (!empty($_POST) && $_POST["form"]==12 && $_POST["num"]!=null)
{
    $num = $_POST["num"];
    if ($num == 11)
    {
        echo "Вы угадали!!!";
    }
    else
    {
        echo '<script src="/for_zad12.js""></script>';

        if ($num<11)
            echo "Загаданное число больше";
        else
            echo "Загаданное число меньше";
    }
}