
<?php
   include ('database.php');
   session_start();
   $username=$_POST['usuario'];
   $password=$_POST['contra'];
             
   $sql = "SELECT * ";
   $sql .= "FROM users ";
   $sql .="WHERE user = '".$username."'";

   $resultados=$conex-> query($sql);

   $fila=mysqli_fetch_assoc ($resultados);

   $passwordHash=$fila['password'];

   $_SESSION['username']=$username;

   if(password_verify($password, $passwordHash)){
      $_SESSION['logueado']=true;
      header ("Location: index.php");
   }
   else {
      $_SESSION['logueado']=false;
        header("location:login.php?fallo=true");
   }

   ?>                        