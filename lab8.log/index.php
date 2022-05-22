<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP</title>
</head>
<body>

<table  border="1">
    <tr >
        <td >
            <h3>exercise 1</h3>
        </td>
        <td>
            нічого вводити на треба
        </td>
        <td>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/classMultiplicationTable.php";
            ?>
        </td>
    </tr>
    <tr >
        <td >
            <h3>exercise 2</h3>
        </td>
        <td>
            нічого вводити на треба
        </td>
        <td>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/classCountry.php";
            ?>
        </td>
    </tr>
    <tr >
        <td >
            <h3>exercise 3</h3>
        </td>
        <td>
            <FORM method= "POST">
                <INPUT type="hidden" name="form1" value="1">
                <strong>Прізвище:</strong><INPUT type="text" name="surname">
                <br><br>
                <strong>Ім'я:</strong><INPUT type="text" name="name">
                <br><br>
                <strong>Вік:</strong><INPUT type="text" name="age">
                <br><br>
                <strong>пошта:</strong><INPUT type="text" name="email">
                <br>
                <INPUT type="submit" value="Вывести действия">
            </FORM>
        </td>
        <td>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/classUser.php";
            ?>
        </td>
    </tr>
    <tr >
        <td >
            <h3>exercise 4</h3>
        </td>
        <td>
            <FORM method= "POST">
                <INPUT type="hidden" name="form2" value="2">
                <strong>Число №1:</strong><INPUT type="text" name="f_num2">
                <br><br>
                <strong>Число №2:</strong><INPUT type="text" name="s_num2">
                <br>
                <INPUT type="submit" value="Вивести результати обчислень">
            </FORM>
        </td>
        <td>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/classCalculator.php";
            ?>
        </td>
    </tr>
    <tr >
        <td >
            <h3>exercise 5</h3>
        </td>
        <td>
            <FORM method= "POST">
                <INPUT type="hidden" name="form3" value="3">
                <strong>Число №1:</strong><INPUT type="text" name="f_num3">
                <br><br>
                <strong>Число №2:</strong><INPUT type="text" name="s_num3">
                <br>
                <INPUT type="submit" value="Вивести результати обчислень">
            </FORM>
        </td>
        <td>
            <?php
            include $_SERVER["DOCUMENT_ROOT"]."/classDispatch.php";
            ?>
        </td>
    </tr>
</table>


</body>
</html>
