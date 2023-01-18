<?php

require_once 'core/validacionFormularios.php';
require_once $aVistas[$_SESSION['paginaEnCurso']];
if (isset($_REQUEST['cancelar'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header('Location: index.php');
    exit;
}
if (isset($_REQUEST['login'])) {
    $entradaOk = true;
    $buscaUsuarioPorCodigo = <<< sq2
    select * from T01_Usuario where T01_CodUsuario=:codUsuario;
sq2;
//actualizacion usuario introducido
    $actualizacionConexiones = <<< sq3
    update T01_Usuario set T01_NumConexiones=T01_NumConexiones+1,T01_FechaHoraUltimaConexion=now() where T01_CodUsuario=:codUsuario;
sq3;
    try {
        $miDB = new PDO(DSN, NOMBREUSUARIO, PASSWORD);
        $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 8, 4, obligatorio: 1);
        $aErrores['password'] = validacionFormularios::validarPassword($_REQUEST['password'], 8, 4, 1, obligatorio: 1);
        foreach ($aErrores as $claveError => $mensajeError) {
            if ($mensajeError != null) {
                $entradaOk = false;
            }
        }
        if ($entradaOk) {
            $conexionAnterior = $oUsuario->T01_FechaHoraUltimaConexion;
            $queryConsultaPorCodigo = $miDB->prepare($buscaUsuarioPorCodigo);
            $queryConsultaPorCodigo->bindParam(':codUsuario', $_REQUEST['usuario']);
            $queryConsultaPorCodigo->execute();
            $oUsuario = $queryConsultaPorCodigo->fetchObject();
            //Comprobación de contraseña correcta
            if (!UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['password'])) {
                $entradaOk = false;
            }
        }
//   si no se ha pulsado iniciar sesion le pedimos que muestre el formulario de inicio
    } catch (PDOException $excepcion) {
        echo 'Error: ' . $excepcion->getMessage() . "<br>";
        echo 'Código de error: ' . $excepcion->getCode() . "<br>";
    } finally {
        unset($miDB);
    }
    if ($entradaOk) {
        $_SESSION['FechaHoraUltimaConexionAnterior'] = $conexionAnterior;
        try {
            $miDB = new PDO(DSN, NOMBREUSUARIO, PASSWORD);
            //actualizamos el usuario
            $queryActualizacion = $miDB->prepare($actualizacionConexiones);
            $queryActualizacion->bindParam(":codUsuario", $oUsuario->T01_CodUsuario);
            $queryActualizacion->execute();
            //Volvemos a buscar el usuario para actualizar el objeto usuario
            $queryConsultaPorCodigo = $miDB->prepare($buscaUsuarioPorCodigo);
            $queryConsultaPorCodigo->bindParam(':codUsuario', $_REQUEST['usuario']);
            $queryConsultaPorCodigo->execute();
            $oUsuario = $queryConsultaPorCodigo->fetchObject();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        } finally {
            unset($miDB);
        }
        $oUsuario2 = new Usuario($oUsuario->T01_CodUsuario, $oUsuario->T01_Password, $oUsuario->T01_DescUsuario, $oUsuario->T01_NumConexiones, $conexionAnterior);
        //Introducimos el usuario en la sesion
        $_SESSION['user208DWESLoginLogoff'] = $oUsuario;
        $_SESSION['paginaEnCurso'] = 'inicioprivado';
        header("Location: index.php");
    }
}

require_once $aVistas['layout'];
