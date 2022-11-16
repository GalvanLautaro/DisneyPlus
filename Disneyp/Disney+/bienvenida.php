<?php
    session_start();

    if(!isset($_SESSION['usuario'])) {
        echo '
          <script>
                alert("por favor debes iniciar sesión");
                location = "index.php";
            </script>
        ';
        header("location: index.php");
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <link rel="stylesheet" href="bienvenida.css">
</head>
<body>
  <h1>COMING SOON...</h1>
  <a href="php/cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>