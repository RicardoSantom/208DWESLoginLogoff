<?php
require_once 'conf/confApp.php';
session_start();
if (!isset($_SESSION['paginaEnCurso'])) {
    $_SESSION['paginaEnCurso'] = 'iniciopublico';
}
require_once $aControladores[$_SESSION['paginaEnCurso']];
?>
