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
        <title>Vista Login</title>
    </head>
    <body>
        <header id="headerId">
            <h1>Aplicación LoginLogoff</h1>
        </header>
        <form id="formLogin" method="post">
            <fieldset>
                <div class="divRegistroCancelar">
                    <h2>YA SOY UN USUARIO REGISTRADO</h2><br>
                    <input type="text" name="usuario" placeholder="Usuario" class="entradadatos"/>
                    <input type="password" name="password" placeholder="Contraseña" id="password" class="entradadatos" />
                    <div class="inicarSesionLogin"><input type="submit" id="login" value="Iniciar Sesión" name="login"></div>
                </div>
                <div class="divRegistroCancelar">
                    <h2>SOY NUEVO EN LOGINLOGOFF</h2><br>
                    <p>Si pulsa el botón de registro le redirigiremos</p>
                    <p>a nuestro formulario de registro.</p>
                    <div class="inicarSesionLogin"><input type="submit" id="registrarse" value="Registrarse" name="registrarse"></div>
                    <div class="inicarSesionLogin"><input type="submit" id="cancelar" value="Cancelar" name="cancelar"></div>
                </div>
            </fieldset>
        </form>
        <div id="divIdioma">
            <h3>En desarrollo mostrar aquí lista desplegable para seleccionar idioma</h3>
             <!--<select name="listaDesplegable" value="<?php
        /* if (isset($_REQUEST['listaDesplegable'])) {
          echo $_REQUEST['listaDesplegable'];
          } */
        ?>"
         <option value="null">Elija una opcion :</option>
         <option value="es">Español</option>
         <option value="pt">Portugués</option>
         <option value="en">Inglés</option>
        </select>>-->
        </div>