<?php

/**
 * Description of UsuarioPDO
 *
 * @author daw2
 */
class UsuarioPDO implements UsuarioDB {

    //put your code here
    public static function validarUsuario($codUsuario, $password = null) {
        $sSelect = <<<QUERY
                SELECT * FROM T01_Usuario
                WHERE T01_CodUsuario='{$codUsuario}' AND
                T01_Password=SHA2("{$codUsuario}{$password}", 256);
            QUERY;
        $oResultado = DBPDO::ejecutarConsulta($sSelect);
        $oDatos = $oResultado->fetchObject();

        if (is_object($oDatos)) {
            return new Usuario($oDatos->T01_CodUsuario, $oDatos->T01_Password, $oDatos->T01_NumConexiones,
                    $oDatos->T01_DescUsuario, $oDatos->T01_FechaHoraUltimaConexion,
                    null, $oDatos->T01_Perfil, $oDatos->T01_ImagenUsuario);
        }
        /*
         * Si no existe, devuelve false.
         */ else {
            return false;
        }
    }

    public static function registrarUltimaConexion($oUsuario) {
        $oUsuario->setNumConexiones($oUsuario->getNumConexiones() + 1);
        $actualizar = <<<query
              UPDATE T01_Usuario SET T01_NumConexiones=T01_NumConexiones+1,T01_FechaHoraUltimaConexion=now()
              WHERE T01_CodUsuario="{$oUsuario->getCodUsuario()}";
              query;
        DBPDO::ejecutarConsulta($actualizar);
        return $oUsuario;
    }

}
