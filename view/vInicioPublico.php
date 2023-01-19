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
        <title>Vista Inicio Público</title>
    </head>
    <body>
        <header id="headerInicioPublico">
            <p>Aplicación multicapa y orientada a objetos - 2ºDAW IES Los Sauces - Vista actual: Inicio Público</p>
            <h1>Aplicación LoginLogoff</h1>  

                
            <div class="divNavContenedor">
                <div class="divNav">
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
                    </ul>
                </div>
                <form id="formInicioPublico" method="post">
                    <fieldset id="fieldsetInicioPublico">
                        <input type="submit" alt="Página login" id="iniciarsesion" value="" name="iniciarsesion">
                    </fieldset>
                </form>
            </div>
        </header>
        <div class="diapositiva">
            <div class="diapositivaInterior">
                <input class="diapositivaAbrir" type="radio" id="diapositiva1" 
                       name="slide" aria-hidden="true" hidden="" checked="checked">
                <div class="diapositivaItem">
                    <label>Ficheros LoginLogoff</label>
                    <img src="./webroot/images/RelacionDeFicheros.png">
                </div>
                <input class="diapositivaAbrir" type="radio" id="diapositiva2" 
                       name="slide" aria-hidden="true" hidden="">
                <div class="diapositivaItem">
                    <label>Diagrama de clases LoginLogoff</label>
                    <img src="./webroot/images/DiagramaDeClases.png">
                </div>
                <input class="diapositivaAbrir" type="radio" id="diapositiva3" 
                       name="slide" aria-hidden="true" hidden="">
                <div class="diapositivaItem">
                    <label>Árbol de navegación LoginLogoff</label>
                    <img src="./webroot/images/ArbolDeNavegación.png">
                </div>
                <label for="diapositiva3" class="diapositivaControl prev control-1">‹</label>
                <label for="diapositiva2" class="diapositivaControl next control-1">›</label>
                <label for="diapositiva1" class="diapositivaControl prev control-2">‹</label>
                <label for="diapositiva3" class="diapositivaControl next control-2">›</label>
                <label for="diapositiva2" class="diapositivaControl prev control-3">‹</label>
                <label for="diapositiva1" class="diapositivaControl next control-3">›</label>
                <ol class="diapositivaIndicador">
                    <li>
                        <label for="diapositiva1" class="diapositivaCirculo">•</label>
                    </li>
                    <li>
                        <label for="diapositiva2" class="diapositivaCirculo">•</label>
                    </li>
                    <li>
                        <label for="diapositiva3" class="diapositivaCirculo">•</label>
                    </li>
                </ol>
            </div>
        </div>
        <br>
        <!--<article>
            <h2>Iniciar Sesión</h2>
            <form  method="post">
                <fieldset id="fieldsetInicioPublico">
                    <div class="inicarSesionInicioPublico"><input type="submit" id="iniciarsesion" value="Iniciar sesion" name="iniciarsesion"></div>
                    <div class="inicarSesionInicioPublico"><input type="submit" id="registrarse" value="Registrarse" name="registrarse"></div>
                    <div class="inicarSesionInicioPublico"><input type="submit" id="salir" value="Salir" name="salir"></div>
                </fieldset>
            </form>
        </article>-->