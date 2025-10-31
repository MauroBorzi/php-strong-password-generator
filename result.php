<?php
session_start();
$password = $_SESSION["password"] ?? "";
?>
<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generata</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

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
      background: #f8fafc;
    }

    .btn-primary {
      background-color: #4f46e5;
      border: none;
    }

    .btn-primary:hover {
      background-color: #4338ca;
    }

    .icon-header {
      font-size: 3rem;
      color: #4f46e5;
      display: block;
      text-align: center;
      margin-bottom: 0.5rem;
    }

    .password-box {
      background: #eef2ff;
      border-radius: 0.5rem;
      padding: 1rem;
      font-size: 1.2rem;
      letter-spacing: 0.08em;
      font-weight: 600;
      color: #1e1b4b;
      text-align: center;
      word-break: break-all;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card p-4 col-12 col-md-6 mx-auto text-center">
      <div class="card-body">
        <i class="bi bi-shield-lock-fill icon-header"></i>
        <h1 class="text-center mb-3 text-primary fw-bold">🔐 Password Generata</h1>

        <?php if ($password != "") { ?>
          <p class="fw-semibold text-secondary mb-2">
            La tua password di <strong><?php echo strlen($password); ?></strong> caratteri è:
          </p>

          <div class="password-box mb-4"><?php echo htmlspecialchars($password); ?></div>
        <?php } else { ?>
          <p class="text-danger fw-semibold mb-4">Nessuna password trovata. Torna indietro e generane una nuova.</p>
        <?php } ?>

        <a href="./index.php" class="btn btn-primary btn-lg w-100">
          <i class="bi bi-arrow-left"></i> Torna indietro
        </a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>