<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Форма регистрации</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"/>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-4">
     <div class="col">
      <h1>Форма авторизации</h1>
      <form action="add.php" method="post">
        <input type="text" class="form-control" name="first_name"
               id="first_name" placeholder="Введите имя"><br>
        <input type="text" class="form-control" name="last_name"
               id="last_name" placeholder="Введите Фамилию"><br>
        <input type="text" class="form-control" name="email"
               id="email" placeholder="Введите Email"><br>
        <input type="text" class="form-control" name="age"
               id="age" placeholder="Ваш вік"><br>
        <button class="btn btn-success"
                type="submit">Авторизоватся</button>
      </form>
</div>
</body>
</html>