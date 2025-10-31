<?php
session_start();
$password = $_SESSION["password"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
</head>

<body>
  <?php if ($password != "") { ?>
    <h1>La tua Password di <?php echo strlen($password) ?> caratteri è: </h1>
    <h3><?php echo $password; ?></h3>
  <?php } ?>
  <a href="./index.php">Torna indietro</a>
</body>

</html>