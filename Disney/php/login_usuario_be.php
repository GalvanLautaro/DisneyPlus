<?php

session_start();

$conexion = mysqli_connect("localhost", "root", "", "login_register_db");

$mail = $_POST['mail'];
$password = $_POST['password'];
$password = hash('sha512', $password);

$validate_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE mail='$mail' and pw='$password'");

if(mysqli_num_rows($validate_login) > 0){
  $_SESSION['usuario'] = $mail;
  header("location: ../bienvenida.php");
  exit();
} else {
  echo('
    <script>
      alert("El usuario no existe, verifique los datos");
      location = "../index.php";
    </script>
  ');
  exit();
}