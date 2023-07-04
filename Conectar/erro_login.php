<?php
    session_start();
    echo $_SESSION['email'];
    echo $_SESSION['senha'];
    session_abort();
?>