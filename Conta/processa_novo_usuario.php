<?php
    include('../Conectar/conectar.php');
    session_start();
    $nusuari_pnome = $_POST['USERNpnome'];
    $nusuari_unome = $_POST['USERNunome'];
    $nusuari_email = $_POST['USERNemail'];
    $nusuari_senha = $_POST['USERNpwd'];
    $nusuari_ani = $_POST['USERani'];

    //$hash_nusuari_pnome = password_hash($nusuari_pnome, PASSWORD_DEFAULT);
    //$hash_nusuari_unome = password_hash($nusuari_unome, PASSWORD_DEFAULT);
    //$hash_nusuari_email = password_hash($nusuari_email, PASSWORD_DEFAULT);
    //$hash_nusuari_senha = password_hash($nusuari_senha, PASSWORD_DEFAULT);
    //$hash_nusuari_ani = password_hash($nusuari_ani, PASSWORD_DEFAULT);
    

    $sql_nuser = "INSERT INTO cc_usuarios(Primeiro_Nome_Usuario, Ultimo_Nome_Usuario, Senha_Usuario, Email_Usuario, Aniversario_Usuario) VALUES ('$nusuari_pnome', '$nusuari_unome', '$nusuari_senha', '$nusuari_email', '" . date("Y-m-d", strtotime($nusuari_ani)) . "')";

    $resultado_insert_nuser = mysqli_query($conn,$sql_nuser);
    
    header('Location: ./conta.html')

?>