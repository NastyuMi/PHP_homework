<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LAB2__PHP</title>
    <style>
        body {
            background: #ffddff ; /* Цвет фона и путь к файлу */
            color: darkred;
        }
    </style>

</head>
<body >
<table  border="1">
    <tr >
        <td width="300px">
            <FORM method= "POST">
                <INPUT type="hidden" name="form" value="1">
                <strong>Зад 1.</strong>
                <br>
                Введите 2 числа:
                <br>
                <strong>1 число:</strong><INPUT type="text" name="num_1">
                <br><br>
                <strong>2 число:</strong><INPUT type="text" name="num_2">
                <br>
                <INPUT type="submit" value="Вывести действия">
            </FORM>
        </td>
        <td width="100px" align=center>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/zad1.php";
            ?>
        </td>
        <td width="300px">
            <FORM method= "POST">
                <INPUT type="hidden" name="form" value="2">
                <strong>Зад 2.</strong>
                <br>
                Введите 2 числа:
                <br>
                <strong>1 число:</strong><INPUT type="text" name="num_1">
                <br><br>
                <strong>2 число:</strong><INPUT type="text" name="num_2">
                <br>
                <INPUT type="submit" value="Вывести действия">
            </FORM>
        </td>
        <td width="100px" align=center>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/zad2.php";
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <FORM method="POST">
                <INPUT type="hidden" name="form" value="34">
                <strong>Зад 3&4.</strong>
                <br><br>
                <strong>Логин:  </strong>  <input maxlength="25"  name="login">
                <br><br>
                <strong>Пароль:</strong> <input type="password" maxlength="25" name="password">
                <br>
                <INPUT type="submit" value="Вход">
            </FORM>
        </td>
        <td align=center>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/zad34.php";
            ?>
        </td>
        <td>
            <FORM method= "POST">
                <INPUT type="hidden" name="form" value="56">
                <strong>Зад 5&6.</strong>
                <br>
                Введите число которое хотите проверить на парность:
                <br>
                <strong>Число:</strong><INPUT type="text" name="num_1">
                <br>
                <INPUT type="submit" value="Вывести результат">
            </FORM>
        </td>
        <td align=center>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/zad56.php";
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <FORM method= "POST">
                <INPUT type="hidden" name="form" value="78">
                <strong>Зад 7&8.</strong>
                <br>
                Шло два отца и два сына.Сколько шло мужчин?
                <br>
                <strong>Ответ:</strong><INPUT type="text" name="num_1">
                <br>
                <INPUT type="submit" value="Проверить ответ">
            </FORM>
        </td>
        <td align=center>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/zad78.php";
            ?>
        </td>
        <td>
            <FORM method= "POST">
                <INPUT type="hidden" name="form" value="9">
                <strong>Зад 9.</strong>
                <br>
                На какое число хотите вывести табл. умножения?
                <br>
                <strong>Число:</strong><INPUT type="text" name="num">
                <br>
                <INPUT type="submit" value="Вывести">
            </FORM>
        </td>
        <td align=center>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/zad9.php";
            ?>
        </td>
    </tr>
    <tr>
        <td width="300px">
            <FORM method= "POST">
                <INPUT type="hidden" name="form" value="1011">
                <strong>Зад 10&11.</strong>
                <br>
                Введите виапазон чисел для отношения к 10 всех чисел диапазона:
                <br>
                <strong>[</strong><INPUT type="text" name="num_1" size="12">
                <INPUT tye="text" name="num_2" size="12"><strong>]</strong>
                <br>
                <INPUT type="submit" value="Вывести действия">
            </FORM>
        </td>
        <td width="100px" align=center>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/zad1011.php";
            ?>
        </td>
        <td width="300px">
            <FORM method= "POST">
                <INPUT type="hidden" name="form" value="12">
                <strong>Зад 12.</strong>
                <br>
                Угадайте число:
                <br>
                <strong>Число: </strong><INPUT type="text" name="num" >
                <br>
                <INPUT type="submit" value="Вывести действия">
            </FORM>
        </td>
        <td width="100px" align=center>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/zad12.php";
            ?>
        </td>
    </tr>
    <tr>
        <td width="300px">
            <FORM method= "POST">
                <INPUT type="hidden" name="form" value="13">
                <strong>Зад 13.</strong>
                <br>
                Введите сколько бактерий было и стало вконце. Мы определим сколько времени прошло.
                <br>
                <strong>Начальное:</strong><INPUT type="text" name="num_1" >
                <br><br>
                <strong>Конечное:</strong><INPUT tye="text" name="num_2" >
                <br>
                <INPUT type="submit" value="Вывести действия">
            </FORM>
        </td>
        <td width="100px" align=center>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/zad13.php";
            ?>
        </td>
        <td width="300px">
            <FORM method= "POST">
                <INPUT type="hidden" name="form" value="14">
                <strong>Зад 14.</strong>
                <br>
                Введите число на какое хотите увидеть табл.умножения:
                <br>
                <strong>Число:</strong><INPUT type="text" name="num" >
                <br>
                <INPUT type="submit" value="Вывести таблицы">
            </FORM>
        </td>
        <td width="100px" align=center>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/zad14.php";
            ?>
        </td>
    </tr>
</table>
</body>
</html>