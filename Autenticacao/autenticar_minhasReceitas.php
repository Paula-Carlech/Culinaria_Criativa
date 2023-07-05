<?php
session_start() ;
    if (!isset($_SESSION['autenticado']) || ($_SESSION['autenticado']!='SIM' )){
	    header('Location: ../Conta/conta.html');
    }else{
        header('Location> ../minhasReceitas.html');
    }
?>