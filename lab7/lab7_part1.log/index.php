<?php

require_once 'connectKOR.php';
$kors = mysqli_query($connect, "SELECT * FROM `kor`");
$kors = mysqli_fetch_all($kors);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Додати нового користувача</title>
</head>
<body>

<h2><span style="text-decoration: underline;">Додати нового користувача</span></h2>
<FORM  method="POST" action="AddNewKor/AddNewKor.php" >
    логін:<br>
    <input type="text" name="login">
    <br><br>
    пароль:<br>
    <input type="text" name="password">
    <br><br>
    Ім'я: <br>
    <input type="text" name="name">
    <br><br>
    Дата народження:<br>
    <input type="text" name="data">
    <br><br>
    Стать:<br>
    <input type="text" name="sex">
    <br><br>
    Країна:<br>
    <input type="text" name="country">
    <br><br>
    ел.пошта:<br>
    <input type="text" name="email">
    <br><br>
    примітка:<br>
    <textarea name="description"></textarea>
    <br><br>
    <button type="submit">Добавить</button>
</form>


<table>
    <tr>
    <th>логін</th>
    <th>пароль</th>
    <th>Ім'я</th>
    <th>Дата народження</th>
    <th>Стать</th>
    <th>Країна</th>
    <th>ел.пошта</th>
    <th>примітка</th>
    </tr>
    <?php
      foreach($kors as $kor) {
          echo '
          <tr>
            <td>'. $kor[0] .'</td>
            <td>'. $kor[1] .'</td>
            <td>'. $kor[2] .'</td>
            <td>'. $kor[3] .'</td>
            <td>'. $kor[4] .'</td>
            <td>'. $kor[5] .'</td>
            <td>'. $kor[6] .'</td>
            <td>'. $kor[7] .'</td>
          </tr>';
    }
        ?>
</table>
</body>
</html>