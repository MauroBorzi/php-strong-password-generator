<?php

require_once "./functions.php";

if ($password != "") {
  session_start();

  $_SESSION["password"] = $password;

  header("Location: ./result.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Password Generator</title>
</head>

<body>

  <h1>Generatore password</h1>

  <form action="">
    <input id="length" name="length" type="number" min="5" max="20">
    <label for="length">Lunghezza password(Da 5 a 20 caratteri)</label>
    <button type="submit">GENERA</button>
  </form>

</body>

</html>