
<!DOCTYPE html>
<html lang="es">
 <!-- head -->
    <head>
        <title> Inicie sesión en su cuenta</title>
        <meta charset="utf-8">
        <meta name="description" content="PowerOn inicio de sesion">
        <meta name="keywords" content=" login, poweron, PowerOn">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css\style.css">
        <!-- google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        
    </head>
<!-- body -->
<body>

<div class="login">

    <p><a href="home.php"><img class="titulo-login" alt="poweron" src="img\logo\Logo.png"> </a></p>
    <div class="form">

    <form class="login-form" action="validacion.php" method="POST">
            <input name="usuario" type="text" placeholder="Usuario"/>
            <input name="contra" type="password" placeholder="Contraseña"/>
            <input type="submit" class="submit" value="Iniciar sesion">

          <?php
           if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
           {
          echo "<div style='color:red'>Usuario o contraseña invalido o no encontrado </div>";
           }
           ?>
           
            <p class="message">No estas registrado? <a href="signup.php">Crear cuenta</a></p>
          </form>
        </div>
    </div>

</body>

<footer class="footerlogin">
  <p>Copyright &copy;2022 PowerOn, todos los derechos reservados.</p>
  <address> Brayan Elgueta <br> BRAYAN.ELGUETA@correoaiep.cl </address>
</footer>

</html>