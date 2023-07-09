<?php 
    include('conectar.php');
    
    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    session_start();

    //Variavel que verifica se a autenticação foi realizada
    
    $usuario_autenticado = false;
    $usuario_id = null;

    $temp_user_email = $_POST['USERemail'];
    //$valida_usuario = password_hash($temp_user_email, PASSWORD_DEFAULT);
    
    $temp_user_senha = $_POST['USERpwd'];
    //$valida_senha = password_hash($temp_user_senha, PASSWORD_DEFAULT);
    
    
    $sql1 = "SELECT * FROM cc_usuarios WHERE Email_Usuario = '$temp_user_email'";
    $result_login = mysqli_query($conn,$sql1);
    
    while ($row = mysqli_fetch_assoc($result_login)){
        if ($temp_user_senha == $row['Senha_Usuario']) {
            $_SESSION['autenticado'] = 'SIM';
            $_SESSION['id'] = $row['Id_Usuario'];                           
            $_SESSION['pnome'] = $row['Primeiro_Nome_Usuario'];             
            $_SESSION['unome'] = $row['Ultimo_Nome_Usuario'];
            header('Location: ../Receitas/minhasReceitas.php');
            exit();
        }else{
            echo $valida_usuario;
            echo "\n";
            echo $valida_senha;
            echo "\n";
            echo $row['Email_Usuario'];
            echo "\n";
            echo $row['Senha_Usuario'];
            echo "\n";
            //echo "<script>alert('Usuário e/ou senha inválidos!'); window.location.href = '../Conta/conta.html';</script>";
            //exit();
        }
    }
// Fecha a conexão
mysqli_close($conn);
?>