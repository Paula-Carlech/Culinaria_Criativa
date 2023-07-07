<?php
    include('../Conectar/conectar.php');
    session_start();
    $nusuari_pnome = $_POST['USERNpnome'];
    $nusuari_unome = $_POST['USERNunome'];
    $nusuari_email = $_POST['USERNani'];
    $nusuari_senha = $_POST['USERNemail'];
    $nusuari_ani = $_POST['USERNpwd'];

    $hash_nusuari_pnome = password_hash($nusuari_pnome, PASSWORD_DEFAULT);
    $hash_nusuari_unome = password_hash($nusuari_unome, PASSWORD_DEFAULT);
    $hash_nusuari_email = password_hash($nusuari_email, PASSWORD_DEFAULT);
    $hash_nusuari_senha = password_hash($nusuari_senha, PASSWORD_DEFAULT);
    $hash_nusuari_ani = password_hash($nusuari_ani, PASSWORD_DEFAULT);

    $sql_nuser = "INSERT INTO cc_usuarios(Primeiro_Nome_Usuario,Ultimo_Nome_Usuario,Senha_Usuario,Email_Usuario,Aniversario_Usuario) VALUES ('$hash_nusuari_pnome','$hash_nusuari_unome','$hash_nusuari_senha','$hash_nusuari_email','$hash_nusuari_ani')";
    $resultado_insert_nuser = mysqli_query($conn,$sql_nuser);

?>