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
        <title>Aplicación LoginLogoff</title>
    </head>
    <body>
        <?php require_once $aVistas[$_SESSION['paginaEnCurso']]; ?>
        <div class="slide">
            <div class="slide-inner">
                <input class="slide-open" type="radio" id="slide-1" 
                       name="slide" aria-hidden="true" hidden="" checked="checked">
                <div class="slide-item">
                    <label>Ficheros LoginLogoff</label>
                    <img src="./webroot/images/Ficheros.png">
                </div>
                <input class="slide-open" type="radio" id="slide-2" 
                       name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <label>Diagrama de clases LoginLogoff</label>
                    <img src="./webroot/images/DiagramaDeClases.png">
                </div>
                <input class="slide-open" type="radio" id="slide-3" 
                       name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <label>Árbol de navegación LoginLogoff</label>
                    <img src="./webroot/images/ArbolDeNavegación.png">
                </div>
                <label for="slide-3" class="slide-control prev control-1">‹</label>
                <label for="slide-2" class="slide-control next control-1">›</label>
                <label for="slide-1" class="slide-control prev control-2">‹</label>
                <label for="slide-3" class="slide-control next control-2">›</label>
                <label for="slide-2" class="slide-control prev control-3">‹</label>
                <label for="slide-1" class="slide-control next control-3">›</label>
                <ol class="slide-indicador">
                    <li>
                        <label for="slide-1" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-2" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-3" class="slide-circulo">•</label>
                    </li>
                </ol>
            </div>
        </div>
        <br>
        <footer>
            <p>2022-23 IES LOS SAUCES. <a href="../../../index.html" id="enlacePrincipal" title="Enlace a Index Principal">Ricardo Santiago Tomé </a> © Todos los derechos reservados</p>
            <p>|</p>
            <a href="https://github.com/RicardoSantom/208DWESLoginLogoff" target="blank" alt="Enlace a Github" id="github" title="RicardoSantom en GitHub"></a>
            <p>|</p>
            <a href="https://www.linkedin.com/in/ricardo-santiago-tom%C3%A9/" id="linkedin" title="Ricardo Santiago Tomé en Linkedim" alt="Enlace Linkedin" target="_blank"></a>
            <p>|</p>
            <a href="http://daw208.ieslossauces.es/doc/curriculumRicardo.pdf" class="material-icons" title="Curriculum Vitae Ricardo Santiago Tomé" target="_blank" id="curriculum"><span class="material-icons md-18">face</span></a>
            <p>|</p>
            <a href="http://daw208.ieslossauces.es/208DWESproyectoDWES/index.php" id="enlaceSecundario"  title="Enlace a Index DWES">Index DWES</a>
            <p>|</p>
            <div>Esta página pretende emular a: <a href="https://www.elganso.com/es/" id="ganso" target="_blank" title="Enlace a página web El Ganso">"El Ganso"</a></div>
        </footer>
    </body>
</html>
