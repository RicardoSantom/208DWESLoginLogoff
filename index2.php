<?php
require_once './conf/confApp.php';
//Inclusión de fichero configuración aplicación con arrays de controladores y vistas.

//Inicio de la sesión
session_start();
//Condicional. Si no hay valor guardado en $_SESSION, le da el valor de página 
//en curso =inicio publico
if (!isset($_SESSION['paginaEnCurso'])) {
    $_SESSION['paginaEnCurso'] = 'iniciopublico';
}
//Inclusión de array de controladores con clave igual al valor de lo guardado
//en la sesión.
require_once $aControladores[$_SESSION['paginaEnCurso']];
require_once $aVistas[$_SESSION['paginaEnCurso']];