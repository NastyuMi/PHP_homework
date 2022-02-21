<?php
if (!empty($_POST) && $_POST["form"]==56 && $_POST["num_1"]!=null ) {
    $num =$_POST["num_1"];
   if ( preg_match('/^\+?\d+$/', $num))
   {
       if($num%2 == 0)
       {
           echo "Число является парным";
       }
       else
       echo "Число является непарным";
   }
   else
       echo "Вы ввели не целое число, попробуйте еще раз.";
}