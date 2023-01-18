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
/**
 *  Meter la session del usuario en un array de variables 
 */
$objectUsuario = $_SESSION['user208DWESLoginLogoff'];

$aInicioPrivado = [
    'codUsuario' => $objectUsuario->get_codUsuario(),
    'descUsuario' => $objectUsuario->get_descUsuario(),
    'numConexiones' => $objectUsuario->get_numConexiones(),
    'fechaHoraUltimaConexionAnterior' => $objectUsuario->get_fechaHoraUltimaConexionAnterior(),
    'perfil' => $objectUsuario->get_perfil()
];
require_once $aVistas['layout'];
