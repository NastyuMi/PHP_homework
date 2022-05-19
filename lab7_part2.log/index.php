<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Сторінка зі статтями та робота з ними</title>
</head>

<body>
<FORM  method="GET" action="Actoin/Action.php" name="myActionName">
    <input type="text" class="form-control" name="id" placeholder="Article ID" /> <br> <br>
    <input name="myActionName" class="btn btn-outline-success" type="submit" value="Показати" />
</FORM>
<?php
include $_SERVER["DOCUMENT_ROOT"]."/Actoin/Action.php";
?>
</body>
</html>
