<?php
$first_name = filter_var(trim($_POST['first_name']),
  FILTER_SANITIZE_STRING);
$last_name = filter_var(trim($_POST['last_name']),
  FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
  FILTER_SANITIZE_STRING);


 $pass = md5($pass."dgdfhtr432");

$mysql = new mysqli('localhost', 'root',  '1111', 'resource1');
$mysql->query("INSERT INTO `resource1`  (`first_name`, `last_name`, `email`)
  VALUES('$first_name', '$last_name', '$email')");

$mysql->close();

header('Location: /proekt2_bd');
?>