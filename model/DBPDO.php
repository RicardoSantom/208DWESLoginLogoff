<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of DBPDO
 *
 * @author daw2
 */
class DBPDO implements DB {

    //put your code here
    public static function ejecutarConsulta($sentenciaSQL, $parametros=null) {
        try {
            // Conexión con la base de datos.
            $DB208DWESLoginLogoff = new PDO(DSN, NOMBREUSUARIO, PASSWORD);

            // Preparación y ejecución de la consulta con sus parámetros.
            $oResultado = $oDB->prepare($sentenciaSQL);
            $oResultado->execute($parametros);

            return $oResultado;
        } catch (PDOException $exception) {
            echo $excepcion->getMessage();
            $_SESSION['paginaEnCurso'] = 'error';
            header('Location: index.php');
            exit;
        } finally {
            unset($DB208DWESLoginLogoff);
        }
    }
    
    public function altaUsuario(){
        
    }
    
    public function modificarUsuario () {
        
    }
    
    public function borrarUsuario () {
        
    }
    
    public function validarCodNoExiste () {
        
    }

}
