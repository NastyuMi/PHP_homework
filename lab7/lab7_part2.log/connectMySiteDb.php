<?php
$connect = new mysqli('localhost:3308', 'root', '', "my_db");
if(!$connect)
{
die('error');
}
