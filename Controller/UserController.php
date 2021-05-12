<?php
    session_start();
    include '../Model/User.php';
    include '../Include/UserValidate.php';
    include '../Dao/UserDAO.php';
    
    if ( (!empty($_POST['txtNome'])) && (!empty($_POST['txtSobrenome'])) &&
        (!empty($_POST['txtEmail'])) && (!empty($_POST['txtIdade'])) && (!empty($_POST['txtSenha'])) )
    {
        $erros = array();

        if (!UserValidate::testarIdade($_POST['txtIdade'])) {
            $erros[] = 'Idade inválida';
        }
        if (!UserValidate::testarEmail($_POST['txtEmail'])) {
            $erros[] = 'E-mail inválido';
        }
        
        if (count($erros) == 0) {
            $user = new User();

            $user->nome = $_POST['txtNome'];
            $user->sobrenome = $_POST['txtSobrenome'];
            $user->idade = $_POST['txtIdade'];
            $user->email = $_POST['txtEmail'];
            $user->senha = $_POST['txtSenha'];

            $userDao = new UserDAO();
            $userDao->create($user);

            $_SESSION['user'] = $user->nome;
            $_SESSION['mail'] = $user->email;
            header("location:../View/User/detail.php");
        }
        else {
            $err = serialize($erros);
            $_SESSION['erros'] = $err;
            header("location:../View/User/error.php");
        }
    }
    else {
        $erros = array();
        $erros[] = 'Informe todos os campos';
        $err = serialize($erros);
        $_SESSION['erros'] = $err;
            
        header("location:../View/User/error.php");
    }
?>

