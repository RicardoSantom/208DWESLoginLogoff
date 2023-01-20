<?php
if(isset($_REQUEST['iniciarsesion'])){
    $_SESSION['paginaAnterior']=$_SESSION['paginaEnCurso'];
    $_SESSION['paginaEnCurso']='login';
    header('Location: index.php');
    exit;
}
require_once $aVistas['layout'];
