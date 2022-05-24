<?php
  session_start();
  if(!isset ($_SESSION['logueado']) || !$_SESSION['logueado']){
     header ("Location:login.php");
    }
   else {
    echo "<div style='color:white'>","Bienvenido usuario:  ","' ", $_SESSION['username']," '","</div>";
   }
?>



<!DOCTYPE html>
<html lang="es">
<head>
<title> Subir Imagen</title>
        <meta charset="utf-8">
        <meta name="description" content="PowerOn inicio de sesion">
        <meta name="keywords" content=" login, poweron, PowerOn">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css\style2.css">
        <!-- google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<div class="logout"><a href="logout.php">Cerrar la sesión</a></div>

<body>

<div class="form">
<form class="upload-form" method="POST" action="upload.php" enctype="multipart/form-data">
        <h4 class="text-center">Seleccione imagen a cargar</h4>
          <label class="col-sm-2 control-label">Archivos</label>
          <input type="file" class="form-control" id="image" name="image" multiple>
          <button name="upload" class="submit">Subir Imagen</button>
          <button name="ver" class="ver"><a href="verimg.php"> Ver imagen</a></button>
      </form>
</div>
</body>

      </html>