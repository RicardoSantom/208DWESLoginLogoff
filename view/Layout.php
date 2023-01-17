<?php
/**
 * Genera la página html que se mostrará en el index,incluye head, footer y en el body hace la siguiente llamada
 * al array de vistas declarado en conf/confApp.php. Este 
 *          */
require_once $aVistas[$_SESSION['paginaEnCurso']];
?>
<footer>
    <p>2022-23 IES LOS SAUCES. <a href="../../../index.html" id="enlacePrincipal" title="Enlace a Index Principal">Ricardo Santiago Tomé </a> © Todos los derechos reservados</p>
    <p>|</p>
    <a href="https://github.com/RicardoSantom/208DWESLoginLogoff" target="blank" alt="Enlace a Github" id="github" title="RicardoSantom en GitHub"></a>
    <p>|</p>
    <a href="https://www.linkedin.com/in/ricardo-santiago-tom%C3%A9/" id="linkedin" title="Ricardo Santiago Tomé en Linkedim" alt="Enlace Linkedin" target="_blank"></a>
    <p>|</p>
    <a href="http://daw208.ieslossauces.es/doc/curriculumRicardo.pdf" class="material-icons" title="Curriculum Vitae Ricardo Santiago Tomé" target="_blank" id="curriculum"><span class="material-icons md-18">face</span></a>
    <p>|</p>
    <a href="../../../208DWESproyectoDWES/index.php" id="enlaceSecundario"  title="Enlace a Index DWES">Index DWES</a>
    <p>|</p>
    <div>Esta página pretende emular a: <a href="https://www.elganso.com/es/" id="ganso" target="_blank" title="Enlace a página web El Ganso">"El Ganso"</a></div>
</footer>
</body>
</html>
