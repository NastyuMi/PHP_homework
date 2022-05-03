<?php
if (!empty($_POST) && $_POST["lastname"]!=null && $_POST["firstname"]!=null && $_POST["age"]!=null && $_POST["email"]!=null)
{
    $user = [
        "Lastname" => "{$_POST['lastname']}",
        "Firstname" => "{$_POST['firstname']}",
        "Age" => "{$_POST['age']}",
        "Email" => "{$_POST['email']}",
    ];
  echo '<table border="1" >';
  foreach ($user as $key => $value) {
      echo '<tr><td>';
      echo $key;
      echo '</td><td>';
      echo $value;
      echo '</td></tr>';
       }
echo '</table>';
}
