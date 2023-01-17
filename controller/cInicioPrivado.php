<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
if (isset($_REQUEST['salir'])) {
    session_destroy();
    header('Location:index.php');
    exit;
}

if (isset($_REQUEST['detalle'])) {
    $_SESSION['paginaEnCurso'] = 'detalle';
    header("Location:index.php");
    exit;
}
$_SESSION['paginaAnterior'] = 'login';
require_once $aVistas['layout'];
