<!DOCTYPE html>
<html lang="es">

<!-- HEAD -->
<head>
    <title> Power On | Videojuegos, Articulos y Más</title>
    <meta charset="utf-8">
    <meta name="description" content=" Power On pagina sobre videojuegos. noticias, articulos y mas. ">
    <meta name="keywords" content=" juegos , videojuegos , games">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    
</head>

<!--body -->
<body>

<!-- HEADER -->
<header>
    <!-- LOGO DE LA PAGINA-->
    <p> <a href="home.php"><img class="titulo" alt="poweron" src="img\logo\Logo.png"> </a></p>
    <!-- NAV -->
<nav class="navegacion">
 <ul class="menu">
    <li><a href="#" title="Juegos">JUEGOS</a>
       <ul class="subjuegos">
           <H4 id="categoria">CATEGORIAS</H4>
           <li><a href="#">PREVIEWS</a></li>
           <li><a href="#">PLAYSTATION</a></li>
           <li><a href="#">XBOX</a></li>
           <li><a href="#">NINTENDO</a></li>
           <li><a href="#">PC</a></li>
           <li><a href="#">MOVIL</a></li>
           <li><a href="#">MAC</a></li>
       </ul>
    </li>
    <li><a href="#" title="Noticias">NOTICIAS</a>
    <ul class="subnoticia">
        <H4 id="categoria">CATEGORIAS</H4>
        <li><a href="#">MAC</a></li>
        <li><a href="#">PLAYSTATION</a></li>
        <li><a href="#">XBOX</a></li>
        <li><a href="#">NINTENDO</a></li>
        <li><a href="#">PC</a></li>
        <li><a href="#">MOVIL</a></li>
    </ul>
    </li>
    <li><a href="#" title="Articulos">ARTICULOS</a>
        <ul class="subarticulo">
           <H4 id="categoria">CATEGORIAS</H4>
            <li><a href="#">MAC</a></li>
            <li><a href="#">PLAYSTATION</a></li>
            <li><a href="#">XBOX</a></li>
            <li><a href="#">NINTENDO</a></li>
            <li><a href="#">PC</a></li>
            <li><a href="#">MOVIL</a></li>
        </ul>
    </li>
    <li><a href="#" title="Contactanos">CONTACTANOS</a></li>

    <!-- REDIRRECION A LOGIN -->
    <a href="login.php" title="login"><img class="iconologin" src="img\icons\login.png"></a>

    <!--  BARRA DE BUSQUEDA -->
    <input type="search" id="search" name="buscador" placeholder="Escribe algo....">
 </ul>
</nav>
</header>

<!-- seccion principal -->
<main>

    <!-- slider automatico-->
<div class="slider">
    <ul>
<li><a href="#"><img src="img\sliders\slider1.jpg" alt="jjk"><a href="#" id="texto">RECOMENDACIÓN PARA IR AL CINE: JUJUTSU KAISEN 0</a>
    <p>El éxito de Jujutsu Kaisen trascendió las páginas monocromáticas y llegó a la pantalla grande de Japón a 
     finales de 2021 para unirse al éxito de otros referentes del anime como Kimetsu no Yaiba.</p></a></li>

<li><a href="#"><img src="img\sliders\slider2.jpg" alt="cc"><a href="#" id="texto">AMONG US, UN FENOMENO DE LOS VIDEOJUEGOS QUE NADIE VIO VENIR</a>
    <p>Una nave espacial con diez tripulantes y entre ellos un impostor. Esta es la premisa de Among Us, el videojuego independiente que en los últimos días se ha convertido en un fenómeno en redes sociales.</h4></p></a>
</li>

<li><a href="#"><img src="img\sliders\slider3.jpg" alt="ps"><a href="#" id="texto">PLAYSTATION ESTARÍA ACABADO SI NO HACE BIEN SUS JUEGOS COMO SERVICIO</a>
    <p>La compra de Bungie, los cambios en PlayStation Plus y las decisiones polémicas en busca de la permanencia</p></a>
</li>
   </ul>
</div>

<!--  elemento aside para la clase noticias-->

<!-- NO TERMINADO -->
<aside>
<section CLASS="titulonoti"> NOTICIAS RECIENTES</section>
<ul>
    <li>EN CONSTRUCCION</li>
    <li>EN CONSTRUCCION</li>
    <li>EN CONSTRUCCION</li>
</ul>
</aside>

</main>


</body>
<footer class="footerhome"> 
       <p>Copyright &copy;2022 PowerOn, todos los derechos reservados.</p>
       <address> Brayan Elgueta <br> BRAYAN.ELGUETA@correoaiep.cl </address>
</footer>
</html>