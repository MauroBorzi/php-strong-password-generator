<?php
$password = "";

if (isset($_GET["length"])) {

  $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $numbers = "0123456789";
  $symbols = "!@#$%^&*()-_=+[]{};:,.<>?/~`";

  $allChar = "";

  if (isset($_GET["letters"]) && $_GET["letters"] == "on") {
    $allChar .= $letters;
  }

  if (isset($_GET["numbers"]) && $_GET["numbers"] == "on") {
    $allChar .= $numbers;
  }

  if (isset($_GET["symbols"]) && $_GET["symbols"] == "on") {
    $allChar .= $symbols;
  }


  for ($i = 0; $i < $_GET["length"]; $i++) {

    $randomPosition = rand(0, strlen($allChar) - 1);
    $randomChar = substr($allChar, $randomPosition, 1);

    $password .= $randomChar;
  }
}
