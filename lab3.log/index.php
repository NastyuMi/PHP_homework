<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LAB3</title>
</head>
<body >
Задание 1
<br>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/first.php"?>
Задание 2
<br>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/second.php"?>
Задание 3
<table>
    <tr>
        <td width=200px">
            <FORM  method="POST">
                <input type="text" name="lastname" placeholder="Lastname" />
                <br><br>
                <input type="text"  name="firstname" placeholder="Firstname" />
                <br><br>
                <input type="text" name="age" placeholder="Age" />
                <br><br>
                <input type="text" name="email" placeholder="Email" />
                <br>
                <input  type="submit" value="GO" />
            </FORM>
        </td>
        <td>
            <?php include $_SERVER["DOCUMENT_ROOT"]. "/third.php" ?>
        </td>
    </tr>
</table>
Задание 4
<br>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/fourth.php"?>
</body>
</html>


