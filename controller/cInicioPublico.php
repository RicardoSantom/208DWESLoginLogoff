<?php
if(isset($_REQUEST['iniciarsesion'])){
    // $_SESSION['paginaAnterior']='paginaEnCurso';
    $_SESSION['paginaEnCurso']='login';
    header('Location: index.php');
    exit;
}
if(isset($_REQUEST['registrarse'])){
    $_SESSION['paginaAnterior']='iniciopublico';
     $_SESSION['paginaEnCurso']='registro';
    header('Location: index.php');
    exit;
}
if(isset($_REQUEST['salir'])){
    header('Location: http://daw208.ieslossauces.es//208DWESproyectoDWES/index.php');
    exit;
}
require_once $aVistas['layout'];