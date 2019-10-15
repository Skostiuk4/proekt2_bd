<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"/>
    <title>Document</title>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Age</th>
    </tr>
    </thead>
</body>
</html>

<?php
require_once("bd.php");
if($connection  == false) {
  echo "Error!";
}
$query = mysqli_query($connection, "SELECT * FROM $bdarticles");
$numrows = mysqli_num_rows($query);
$i = 0;
while ($row = mysqli_fetch_assoc($query)) {
  echo "<table bordre='1'><th>". $row['first_name']. "</th>" . '<br>';
}

?>


