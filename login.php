<?php 
    include('conexao.php');
    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    session_start();

    //Variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_senha = null;
    $usuario_email =null;

    $valida_usuario = md5($_POST['usuario']);
    $valida_senha = md5($_POST['senha']);
    $sql = "SELECT * FROM tb_usuario WHERE nome_usuario = '$valida_usuario' AND senha_usuario = '$valida_senha'";
    /*if( isset($_POST['usuario']) && !empty($_POST['usuario']) || $_POST['usuario']==='0'){
        $sql = $sql . " and senha = '$senha'";
        
    }*/
    $result = mysqli_query($conn,$sql);
    $num_tweets = mysqli_num_rows($result);
    if($num_tweets > 0){
        $resultado = mysqli_fetch_assoc($result);
        if(isset($resultado)){
            $_SESSION['autenticado']='SIM';
            $_SESSION['id'] = $resultado['id_usuario'];
            $_SESSION['nome'] = $_POST['usuario'];
            $_SESSION['email'] = $resultado['email_usuario'];
            $_SESSION['senha'] = $_POST['senha'];
            header('Location: dataetweet.php');
            header('Location: home.php');
        }
    }else{
        $_SESSION['num_tweet'] = 0;
        echo "<script>alert('Usuário conectado com sucesso');</script>";
        header('Location: erro_login.php');
        
    }


?>