<?php

require_once 'settings.php';

$connection = mysqli_connect($host, $user, $password, $database);
//mygit mysqli_set_charset($connection, "utf8");
if(!$connection){
  echo "Error" . mysqli_connect_error();
  exit;
}
session_start();