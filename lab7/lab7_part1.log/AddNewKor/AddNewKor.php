<?php
require_once '../connectKOR.php';


$login= $_POST['login'];
$password= $_POST['password'];
$name= $_POST['name'];
$data= $_POST['data'];
$sex= $_POST['sex'];
$country= $_POST['country'];
$email= $_POST['email'];
$description = $_POST['description'];

mysqli_query($connect, "INSERT INTO `kor` (`логін`, `пароль`, `Ім'я`, `Дата народження`, `Стать`, `Країна`, `ел.пошта`, `примітка`) VALUES ('$login', '$password', '$name','$data', '$sex', '$country', '$email',' $description')");

header('Location: /index.php');
