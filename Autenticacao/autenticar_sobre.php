<?php
session_start() ;
    if (!isset($_SESSION['autenticado']) || ($_SESSION['autenticado']!='SIM' )){
	    header('Location: ../index.html');
    }else{
        header('Location> ../sobre.html');
    }
?>