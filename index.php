<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Форма реєстрації</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"/>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php require_once 'list.php'; ?>

  <?php

  if (isset($_SESSION['message'])): ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">

      <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
      ?>
    </div>
  <?php endif ?>

  <div class="container">
  <?php
    $mysqli = new mysqli('localhost', 'root', '1111', 'resource1') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM users") or die($mysqli->error);
    //pre_r($result);
    ?>

          <table class="table">
          <thead>
          <tr>
              <th>Id</th>
              <th>First name</th>
              <th>Last name</th>
              <th>Email</th>
              <th>Age</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php while ($row = $result->fetch_assoc()): ?>
          <tbody>
              <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['first_name'];?></td>
                <td><?php echo $row['last_name'];?></td>
                <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['age'];?></td>
                  <td>
                    <a href="index.php?edit=<?php echo $row['id']; ?>"
                    class="btn btn-info">Edit</a>
                    <a href="list.php?remuve=<?php echo $row['id']; ?>"
                    class="btn btn-danger">remuve</a>
                    </td>  
              </tr>
              <?php endwhile;?>
          </tbody>
        </table>
<?php

    function pre_r( $array ) {
      echo '<pre>';
      print_r($array);
      echo '</pre>';
    }
    ?>

<div class="container mt-4">
     <div class="col">
      <h1>Форма авторизації</h1>
      <form action="list.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" class="form-control" name="first_name"
               id="first_name" value="<?php echo $first_name; ?>" placeholder="Введіть Ім'я"><br>
        <input type="text" class="form-control" name="last_name"
               id="last_name" value="<?php echo $last_name; ?>" placeholder="Введіть Фамілію"><br>
        <input type="text" class="form-control" name="email"
               id="email" value="<?php echo $email; ?>" placeholder="Введіть Email"><br>
        <select type="list" class="form-control" name="age"
               id="age" value="<?php echo $age; ?>" placeholder="Ваш вік"><br>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            </select><br>
             <div class ="form-group">
            <?php
            if ($update == true):
              ?>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
                <?php else: ?>
        <button type="submit" class="btn btn-primary" name="save">Save</button>
        <?php endif; ?>
        </div>          
      </form>
</div>
</div>
</body>
</html>
