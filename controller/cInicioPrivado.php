<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
if (isset($_REQUEST['salir'])) {
    $_SESSION['paginaEnCurso'] = 'iniciopublico';
    $_SESSION['userDAW208AppLoginLogoff'] = null;
    session_destroy();
    header('Location:index.php');
    exit;
}

if (isset($_REQUEST['detalle'])) {
    $_SESSION['paginaEnCurso'] = 'detalle';
    $_SESSION['paginaAnterior']='inicioprivado';
    header("Location:index.php");
    exit;
}
require_once $aVistas['layout'];
