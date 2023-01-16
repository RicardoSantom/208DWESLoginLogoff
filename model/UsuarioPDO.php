<?php
/**
 * Description of UsuarioPDO
 *
 * @author daw2
 */
class UsuarioPDO implements UsuarioDB {

    //put your code here
    public static function validarUsuario($codUsuario, $password=null) {
        $sSelect = <<<QUERY
                SELECT * FROM T01_Usuario
                WHERE T01_CodUsuario='{$codUsuario}' AND
                T01_Password=SHA2("{$codUsuario}{$password}", 256);
            QUERY;
        $oResultado = DBPDO::ejecutarConsulta($sSelect);
        $oDatos = $oResultado->fetchObject();

        if ($oDatos) {
            return new Usuario($oDatos->T01_CodUsuario, $oDatos->T01_Password, $oDatos->T01_DescUsuario, $oDatos->T01_NumConexiones, $oDatos->T01_FechaHoraUltimaConexion, null, $oDatos->T01_Perfil);
        }
        /*
         * Si no existe, devuelve false.
         */ else {
            return false;
        }
    }

}
