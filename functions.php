<?php
$password = "";

if (isset($_GET["length"])) {

  $lower = "abcdefghijklmnopqrstuvwxyz";
  $upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $numbers = "0123456789";
  $symbols = "!@#$%^&*()-_=+[]{};:,.<>?/~`";

  $allChar = $lower . $upper . $numbers . $symbols;

  for ($i = 0; $i < $_GET["length"]; $i++) {

    $randomPosition = rand(0, strlen($allChar) - 1);
    $randomChar = substr($allChar, $randomPosition, 1);

    $password .= $randomChar;
  }
}
