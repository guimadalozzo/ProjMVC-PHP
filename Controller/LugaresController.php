<?php
    session_start();
    include '../Model/Lugares.php';
    include '../Dao/LugaresDAO.php';

    function criar() {
            $user = unserialize($_SESSION['usuario']);

            $lugar = new Lugares();
            $lugar->user_id = $user[0]['id'];
            $lugar->local = $_POST['txtLocal'];
            $lugar->pais = $_POST['txtPais'];

            $lugarDao = new LugaresDAO();
            $lugarDao->create($lugar);

            listar();
    }

    function listar() {
        echo "LUGAR INSERIDO COM SUCESSO";
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
        }
    }
?>

