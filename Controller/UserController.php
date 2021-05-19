<?php
    session_start();
    include '../Model/User.php';
    include '../Include/UserValidate.php';
    include '../Dao/UserDAO.php';

    function criar() {
        $erros = array();

        if (!UserValidate::testarIdade($_POST['txtIdade']))  $erros[] = 'Idade inválida';
        if (!UserValidate::testarEmail($_POST['txtEmail']))  $erros[] = 'E-mail inválido';
        
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
    
    function listar() {
        $userDao = new UserDAO();
        $usuarios = $userDao->search();

        $_SESSION['users'] = serialize($usuarios);
        header("location:../View/User/list.php");
    }

    function atualizar() {
        echo "Método para atualizar um usuário";
    }

    function deletar() {
        $id = $_GET['id'];
        if (isset($id)) {
            $userDao = new UserDAO();
            $userDao->delete($id);
            header("location:../../Controller/UserController.php?operation=consultar");
        }
        else {
            echo 'Usuário informado não existente';
        }
    }

    $operacao = $_GET['operation'];
    if (isset($operacao)) {
        switch($operacao) {
            case 'cadastrar':
                criar();
                break;
            case 'consultar':
                listar();
                break;
            case 'atualizar':
                atualizar();
                break;
            case 'deletar':
                deletar();
                break;
        }
    }
?>

