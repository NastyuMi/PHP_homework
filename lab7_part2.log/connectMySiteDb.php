<?php
$connect = new mysqli('localhost:3308', 'root', '', "mysitedb");
if(!$connect)
{
die('error');
}
