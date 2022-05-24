
<!-- codigo php para registrar datos de usuarios-->
<?php 

include("database.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['user']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 ) {
	    $name = trim($_POST['user']);
	    $email = trim($_POST['email']);
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	    $consulta = "call sp_registro('".$name."','".$email."','".$password."')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
            
           <?php
    }
}

?>

<!-- comienzo html -->
<!DOCTYPE html>
<html lang="es">
 <!-- head -->
    <head>
        <title> Registrate </title>
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
<p><a href="home.php"><img class="titulo-register" alt="poweron" src="img\logo\Logo.png"> </a></p>
<div class="form">

    <form class="register-form" action="signup.php" method="POST">
            <input name="user" type="text" placeholder="Nombre de usuario"/>
            <input name="password" type="password" placeholder="Contraseña"/>
            <input name="email" type="email" placeholder="Email"/>
            <input type="submit" class="submit" name="register" value="Crear">
          </form>
          <p class="message"> Ya estas registrado? <a href="login.php">Inicia sesión</a></p>
          </div>
    </div>
    
</body>

<footer class="footerlogin">
  <p>Copyright &copy;2022 PowerOn, todos los derechos reservados.</p>
  <address> Brayan Elgueta <br> BRAYAN.ELGUETA@correoaiep.cl </address>
</footer>

</html>