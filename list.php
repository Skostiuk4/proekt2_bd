<?php
  require_once("bd.php");
  if($connection  == false) {
    echo "Error!";
    echo mysqli_connect_errno();
    exit();
  }

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"/>
</head>
<body>

 <?php
 $query = mysqli_query($connection, "SELECT * FROM $bdarticles");
 $numrows = mysqli_num_rows($query);
  $i = 0;
    while ($row = mysqli_fetch_assoc($query)) {
      echo $row['first_name']. '<br>';
    }

 ?>
</body>
</html>
