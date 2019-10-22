<?php

  session_start();
  
  $mysqli = new mysqli('localhost', 'root', '1111', 'resource1') or die(mysqli_error($mysqli));

  $id = 0;
  $first_name = '';
  $last_name = '';
  $email = '';
  $age = '';

  if (isset($_POST['save'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];  

    
    
    $mysqli->query("INSERT INTO `users` (`first_name`, `last_name`, `email`, `age`) VALUES('$first_name', '$last_name', '$email', '$age')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success"; 

    header("location: index.php");

  }

  if (isset($_GET['remuve'])) {
    $id = $_GET['remuve'];
    $mysqli->query("DELETE FROM users WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been remuved!";
    $_SESSION['msg_type'] = "danger";

    header("location: index.php");
  }

  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM users WHERE id=$id") or die($mysqli->error());
    if (count($result)==1){
      $row = $result->fetch_array();
      $first_name = $row['first_name'];
      $last_name = $row['last_name'];
      $email = $row['email'];
      $age = $row['age'];
    }
  }

  if (isset($_POST['update'])){
     $id = $_POST['id'];
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $email = $_POST['email'];
     $age = $_POST['age'];

    $mysqli->query("UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email', age='$age' WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "Warning";

    header('location: index.php');
  }
