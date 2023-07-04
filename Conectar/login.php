<?php 
    include('conectar.php');
    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    session_start();

    //Variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_senha = null;
    $usuario_email =null;

    $temp_user_email = $_POST['USERemail'];
    $valida_usuario = password_hash($temp_user_email, PASSWORD_DEFAULT);
    $temp_user_senha = $_POST['USERpwd'];
    $valida_senha = password_hash($temp_user_senha, PASSWORD_DEFAULT);
    
    $sql1 = "SELECT id_Usuario, Email_Usuario, Senha_Usuario FROM cc_usuario WHERE Email_Usuario = '$valida_usuario'";
    $result = mysqli_query($conn,$sql1);
    
    if($result && mysqli_num_rows($result) > 0 ){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($temp_user_senha,$row['Senha_Usuario'])){
            
            $_SESSION['autenticado']='SIM';
            $usuario_autenticado = true;
            $usuario_id = $_SESSION['id'] = $row['Id_Usuario'];                           
            $_SESSION['email'] = $_POST['USERemail'];
            $_SESSION['senha'] = $_POST['USERpwd'];
            $sql2 = "SELECT Primeiro_Nome_Usuario, Ultimo_Nome_Usuario FROM cc_priv_usuario WHERE id_usuario_usuario = '$usuario_id'";
            $resultado = mysqli_query($conn,$sql2);
            $linha = mysqli_fetch_assoc($resultado);
            $_SESSION['nome'] = $linha['Primeiro_Nome_Usuario'];               
            header('Location: ../minhasReceitas.html');
            
        }else{
            echo"<p style='color:#FF0000'>Senha inválida";
        }
    }
    else{        
        echo "<script>alert('Usuário conectado com sucesso');</script>";
        header('Location: erro_login.php');
        exit(0);
    }

// Fecha a conexão
mysqli_close($conn);
?>