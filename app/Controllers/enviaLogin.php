<?php

//die(password_hash("@LARbook$1458$", PASSWORD_DEFAULT)); // hash para senha, colocar no DB

session_start();
ob_start();

//include_once 'conexao.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (!empty($dados['login'])) {
    $usuario = loginUsuario($conn,$dados['usuario'],$dados['senha_usuario']);
    if($usuario){
            $_SESSION['id'] = $usuario['id_usuario'];
            $_SESSION['usuario'] = $usuario['usuario'];
            header("Location: home");
            
    }else{
        $_SESSION['msg'] = "Erro: Usuário ou senha inválida!";
        header("Location: index");
    }

} 

    function loginUsuario($conn,$email, $senha)
    {   
        try {  
               
            $sql  = "SELECT * FROM usuarios WHERE usuario = :email_usuario";
            $stmt = $conn->prepare($sql); 
            $stmt->bindParam(':email_usuario', $email);
            $stmt->execute(); 
            if($usuario = $stmt->fetch()){
                if(password_verify($senha,$usuario['senha_usuario'])){

                    return json_decode(json_encode($usuario), true); 

                }
                
            }
            
        }
        
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }

        return null;
    }