<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
 if(isset($_REQUEST['volver'])){
        $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso']; 
        $_SESSION['paginaEnCurso'] = 'inicioPublico';
        header('Location: index.php');
        exit;
    }
    
    if(isset($_REQUEST['registro'])){
        $_SESSION['paginaAnterior'] = $_SESSION['paginaEnCurso']; 
        $_SESSION['paginaEnCurso'] = 'registro';
        header('Location: index.php');
        exit;
    }

    $aRespuestas = [
        'usuario' => '',
        'password' => ''
    ];
    
    $bEntradaOK = true;
    
    if(isset($_REQUEST['login'])){    
        
        if (validacionFormularios::comprobarAlfaNumerico($_REQUEST['usuario'], 8, 4, 1) 
                && validacionFormularios::comprobarAlfaNumerico($_REQUEST['password'], 8, 4, 1)) {
            $bEntradaOK = false;
        }
        else{
            $oUsuarioValido = UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['password']);
            
            if(!$oUsuarioValido){
                $bEntradaOK = false;
            }
        }
    }
    else{
        $bEntradaOK = false;
    }
    
    if($bEntradaOK){
            $aRespuestas['usuario'] = $_REQUEST['usuario'];
            $aRespuestas['password'] = $_REQUEST['password'];
        
                $_SESSION['paginaEnCurso'] = 'inicioPrivado';
            
            header('Location: index.php');
            exit;
    }
    require_once $aVistas['layout'];