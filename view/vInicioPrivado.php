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
        <link rel="stylesheet" href="webroot/css/estilosLogin.css"/>
        <link rel="stylesheet" href="webroot/css/estilosInicioPrivado.css"/>
        <title>Vista Inicio Privado</title>
    </head>
    <body>
        <header id="headerId">
            <h1>Aplicación LoginLogoff</h1>
            <h3>Vista Inicio Privado</h3>
            <input type="checkbox" name="rd" id="hbger">
            <label id="labelInicioPublico" for="hbger"></label>
            <input type="checkbox"  name="br" id="brClose">
            <ul class="menu">
                <label id="labelClose" for="brClose">X</label>
                <h1>Login Logoff</h1>
                <ul class="listaInternaDesplegable">
                    <h2>EN DESARROLLO</h2>
                    <li>Vista registro</li>
                    <li>Vista password</li>
                    <li>Vista borrar</li>
                </ul>
                <h2>NOVEDADES</h2>
                <li>Vista Inicio Público</li>
                <li>Vista Login</li>
                <li>Vista Inicio Privado</li>
                <li>Vista Detalle</li>
                <h2>TECNOLOGÍAS USADAS</h2>
                <li><a href="webroot/images/imagenPHP.png" target="blank">PHP</a></li>
                <li><a href="webroot/images/imagenMySQL.png" target="blank">MySQL</a></li>
                <li><a href="webroot/images/imagenHTML.png" target="blank">HTML 5</a></li>
                <li><a href="webroot/images/imagenCSS.png" target="blank">CSS</a></li>
            </ul>
        </header>
        <main>
            <form name="formInicioPrivado" id="formInicioPrivado" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="submit" alt="Página login" id="iniciarsesion" value="d" name="iniciarsesion">
                <input type="submit" id="detalle" value="Detalle" name="detalle">
                <input type="submit" id="salirInicioPrivado" value="Salir" name="salir">
            </form>
            <article>
                <h2 id="bienvenida"><?php echo"Bienvenido " . $_SESSION['user208DWESLoginLogoff']->getDescUsuario(); ?></h2>
                <div id="divBienvenida">
                    <div id="divBienvenidaInicio">
                        <h3>Ultimo inicio de sesión: </h3>
                        <p>
                            <?php
                            //comprobamos el numero de conexiones si es mayor a 1 tambien mostramos la fecha y hora de la ultima conexion
                            if ($_SESSION['user208DWESLoginLogoff']->getNumConexiones() > 1) {
                                echo $_SESSION['user208DWESLoginLogoff']->getFechaHoraUltimaConexionAnterior();
                            } else {
                                ?>
                            </p>
                            <p>
                                <?php
                                echo 'Es la primera vez que te conectas, aún no hay una fecha guardada de tu última conexión';
                            }
                            ?>
                        </p>
                    </div>
                    <div id="divBienvenidaTabla">
                        <h3>Datos objeto usuario</h3>
                        <table>
                            <thead>
                            <caption>Datos Objeto Usuario en $_SESSION</caption>
                            <tr>
                                <th>Atributo</th>
                                <th>Valor</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Código usuario</td>
                                    <td><?php echo $_SESSION['user208DWESLoginLogoff']->getCodUsuario() ?></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><?php echo $_SESSION['user208DWESLoginLogoff']->getPassword() ?></td>
                                </tr>
                                <tr>
                                    <td>Descripción usuario</td>
                                    <td><?php echo $_SESSION['user208DWESLoginLogoff']->getDescUsuario() ?></td>
                                </tr>
                                <tr>
                                    <td>Número conexiones</td>
                                    <td><?php echo $_SESSION['user208DWESLoginLogoff']->getNumConexiones() ?></td>
                                </tr>
                                <tr>
                                    <td>Fecha Hora Ultima Conexion</td>
                                    <td><?php echo date_format($_SESSION['user208DWESLoginLogoff']->getFechaHoraUltimaConexion(), 'Y-m-d H:i:s') ?></td>
                                </tr>
                                <tr>
                                    <td>Fecha Hora Ultima Conexion Anterior</td>
                                    <td><?php echo $_SESSION['user208DWESLoginLogoff']->getFechaHoraUltimaConexionAnterior() ?></td>
                                </tr>
                                <tr>
                                    <td>Perfil</td>
                                    <td><?php echo $_SESSION['user208DWESLoginLogoff']->getPerfil() ?></td>
                                </tr>
                                <tr>
                                    <td>Imagen usuario</td>
                                    <td><?php echo $_SESSION['user208DWESLoginLogoff']->getImagenUsuario() ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="divBienvenidaConexiones">
                        <h3>Número de conexiones</h3>
                        <p>
                            <?php
                            if ($_SESSION['user208DWESLoginLogoff']->getNumConexiones() == 2) {
                                echo"Es la primera vez que te conectas.";
                            } else{                                
                                //Mostramos el numero de conexiones
                                echo"<p>Te has conectado " . $_SESSION['user208DWESLoginLogoff']->getNumConexiones() . " veces";
                            }
                            ?>
                    </div>
                </div>
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
                ?>
            </article>
        </main>
    </body>
</html>