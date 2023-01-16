<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

    $_SESSION['paginaAnterior'] = 'inicioPublico';
    
    if(isset($_REQUEST['volver'])){
        header('Location: http://daw208.ieslossauces.es//208DWESproyectoDWES/index.php');
        exit;
    }
    
    if(isset($_REQUEST['registro'])){
        $_SESSION['paginaEnCurso'] = 'registro';
        header('Location: index.php');
        exit;
    }
    
    if(isset($_REQUEST['login'])){
        $_SESSION['paginaEnCurso'] = 'login';
        header('Location: index.php');
        exit;
    }
    $paginaEnCurso = 'inicioPublico';
    require_once $aVistas[$paginaEnCurso];