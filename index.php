<?php

require_once "./functions.php";

if ($password != "") {
  session_start();

  $_SESSION["password"] = $password;

  header("Location: ./result.php");
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #4f46e5, #9333ea);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Inter", system-ui, sans-serif;
    }

    .card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .btn-primary {
      background-color: #4f46e5;
      border: none;
    }

    .btn-primary:hover {
      background-color: #4338ca;
    }

    label {
      margin-left: 0.25rem;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card p-4 col-12 col-md-6 mx-auto bg-light">
      <div class="card-body">
        <h1 class="text-center mb-4 text-primary fw-bold">🔐 Generatore di Password</h1>

        <form>
          <div class="mb-3">
            <label for="length" class="form-label fw-semibold">Lunghezza (da 5 a 20 caratteri)</label>
            <input id="length" name="length" type="number" min="5" max="20" class="form-control" placeholder="Es. 12">
          </div>

          <div class="mb-3">
            <label class="fw-semibold d-block mb-2">Caratteri da includere:</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" id="letters" name="letters" type="checkbox">
              <label class="form-check-label" for="letters">Lettere</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" id="numbers" name="numbers" type="checkbox">
              <label class="form-check-label" for="numbers">Numeri</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" id="symbols" name="symbols" type="checkbox">
              <label class="form-check-label" for="symbols">Simboli</label>
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg w-100">
              <i class="bi bi-shield-lock"></i> Genera
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>