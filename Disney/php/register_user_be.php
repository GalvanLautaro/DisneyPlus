<?php

$conexion = mysqli_connect("localhost", "root", "", "login_register_db");

$password = $_POST['password'];
$mail = $_POST['mail'];
$password = hash('sha512', $password);
$query = "INSERT INTO usuarios(mail, pw)
          VALUES('$mail', '$password')";

$verify_mail = mysqli_query($conexion, "SELECT * FROM usuarios WHERE mail='$mail' ");

if(mysqli_num_rows($verify_mail) > 0){
  echo('
    <script>
      alert("Este correo ya esta registrado, intenta con uno diferente");
      location = "../index.php";
    </script>
  ');
  exit();
}

$run = mysqli_query($conexion, $query);

if($run) echo('
        <script>
          alert("Usuario almacenado exitosamente");
          location = "../RegisterDisney/Register2.html";
        </script>
  ');
else echo('
        <script>
          alert("Intentalo de nuevo, usuario no almacenado");
          location = "../RegisterDisney/Register2.html";
        </script>
     ');

mysqli_close($conexion);