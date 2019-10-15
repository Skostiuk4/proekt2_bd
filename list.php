<?php
  $query = "SELECT * FROM `users`";
  $search_result = filterTable($query);

function filterTable($query) {
    $connect = mysqli_connect("localhost", 'root', '1111', 'resource1');
	$filter_Result = mysqli_query($connect, $query);
	return $filter_Result;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"/>
    <title>Document</title>
</head>
<body>
<form>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>First name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($search_result)):?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['first_name'];?></td>
                <td><?php echo $row['last_name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['age'];?></td>
            </tr>
        <?php endwhile;?>
    </table>
</form>
</body>
</html>

