<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Ricardo Santiago Tomé">
        <meta name="copyright" content="Ricardo Santiago Tomé" />
        <meta name="keywords" content="desarrollo,software,servidor,cliente,PHP,HTML,CSS,JavaScript,MySQL,aplicacion,web"/>
        <meta name="description" content="Aplicacion de control de acceso y navegación LoginLogoff, práctica 2ºDAW IES Los Sauces, Benavente"/>
        <link href="webroot/css/fonts.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" sizes="96x96" href="../webroot/images/favicon-96x96.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="webroot/css/estilos.css"/>
        <title>Vista Detalle</title>
    </head>
    <body>
        <header class="headerPropio">
            <h1>Aplicación LoginLogoff</h1>
        </header>
        <main>
            <article>
                <h3>Enunciado: Login Correcto, bienvenida a usuario e información.</h3>
                 <?php echo"Bienvenido ".$_SESSION['user208DWESLoginLogoff']->T01_DescUsuario;?>
                <form name="ejercicio" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="submit" id="detalle" value="Detalle" name="detalle">
                    <input type="submit" id="salir" value="Salir" name="salir">
                </form>
                <?php
                /**
                 * @author Ricardo Santiago Tomé - RicardoSantom en Github https://github.com/RicardoSantom
                 * @version 1.0
                 * @since 15/01/2023
                 */
                //Damos la bienvenida al usuario haciendo uso de la cookie y el valor en ella recojido para idioma
                /* switch ($_COOKIE['cookieIdioma']) {
                  case "es":
                  echo"<h5>Bienvenido " . $_SESSION['usuario208DWESLoginLogoffTema5']->T01_DescUsuario."</h5>";
                  $_COOKIE=['cookieIdioma']['es'];
                  break;
                  case "en":
                  echo"<h5>Welcome " . $_SESSION['usuario208DWESLoginLogoffTema5']->T01_DescUsuario."</h5>";
                  $_COOKIE=['cookieIdioma']['en'];
                  break;
                  case "pt":
                  echo"<h5>Bem-vido " . $_SESSION['usuario208DWESLoginLogoffTema5']->T01_DescUsuario."</h5>";
                  $_COOKIE=['cookieIdioma']['pt'];
                  break;
                  default:
                  echo"<h5>Bienvenido " . $_SESSION['usuario208DWESLoginLogoffTema5']->T01_DescUsuario."</h5>";
                  $_COOKIE=['cookieIdioma']['es'];
                  break;
                  } */
                //comprobamos el numero de conexiones si es mayor a 1 tambien mostramos la fecha y hora de la ultima conexion
                if ($_SESSION['user208DWESLoginLogoff']->T01_NumConexiones > 1) {
                    echo"<p>Ultimo inicio de sesión: " . $_SESSION['FechaHoraUltimaConexionAnterior'] . "</p>";
                    echo"<p>Te has conectado " . $_SESSION['user208DWESLoginLogoff']->T01_NumConexiones . " veces</p>";
                } else {
                    echo '<p>Es la primera vez que te conectas</p><br>';
                }
                ?>
            </article>
        </main>
    </body>
</html>