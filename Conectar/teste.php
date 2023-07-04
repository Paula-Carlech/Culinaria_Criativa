<?php
    include('conectar.php');
    session_start();
    $user_insert_emailbc = "pedro@gmail.com";
    $user_insert_senhabc = "1234";
    $user_insert_pnomebc = "Pedro";
    $user_insert_unomebc = "Lucas";
    $user_insert_databc = "2023/07/04";
    //inserir dados no banco de dados
    $temp_pname = password_hash($user_insert_pnomebc, PASSWORD_DEFAULT);
    $temp_uname = password_hash($user_insert_unomebc, PASSWORD_DEFAULT);
    $temp_senha = password_hash($user_insert_senhabc, PASSWORD_DEFAULT);
    $temp_email = password_hash($user_insert_emailbc, PASSWORD_DEFAULT);
    $temp_ani = password_hash($user_insert_databc, PASSWORD_DEFAULT);

    $sqlteste = "INSERT INTO cc_usuario(Primeiro_Nome_Usuario, Ultimo_Nome_Usuario, Senha_Usuario, Email_Usuario, Aniversario_Usuario) VALUES ('$temp_pname','$temp_uname','$temp_senha','$temp_email','$temp_ani')";
    $result = mysqli_query($conn,$sqlteste);
?>

