<?php
if (!empty($_POST) && $_POST["form"]==34 && $_POST["login"]!=null && $_POST["password"]!=null)
{
    $log=$_POST["login"];
    $pass=$_POST["password"];
    $users = [
        "login" => array(
            "log1" => "Петр Петрович",
            "log2" => "Иван Иванович",
            "log3" => "Семен Семеныч",
            "log4" => "Дим Димыч",
            "log5" => "Тем Темыч"
        ),
        "password" => array(
            "log1" => "11111111",
            "log2" => "22222222",
            "log3" => "33333333",
            "log4" => "44444444",
            "log5" => "55555555"
        )
    ];
    if($pass == $users["password"]["$log"])
    {
        echo "Приветствуем вас,", $users["login"]["$log"];
    }
    else
    {
        echo "Вы вввели не верный логин/пароль.".'<br>'."Или Вы не зарегистрированы(";
    }
}