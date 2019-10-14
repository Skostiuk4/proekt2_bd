<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Форма реєстрації</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"/>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-4">
     <div class="col">
      <h1>Форма авторизації</h1>
      <form action="add.php" method="post">
        <input type="text" class="form-control" name="first_name"
               id="first_name" placeholder="Введіть Ім'я"><br>
        <input type="text" class="form-control" name="last_name"
               id="last_name" placeholder="Введіть Фамілію"><br>
        <input type="text" class="form-control" name="email"
               id="email" placeholder="Введіть Email"><br>
        <select type="list" class="form-control" name="age"
               id="age" placeholder="Ваш вік"><br>
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
        <button class="btn btn-success"
                type="submit">Авторизоватись</button>
      </form>
</div>
</body>
</html>