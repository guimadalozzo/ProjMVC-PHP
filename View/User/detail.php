<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Usuário efetuado</title>
    </head>
    <body>
        <h1>Resultado</h1><p>
        <?php
            if (isset($_SESSION['user']) && isset($_SESSION['mail'])) {
                echo '<br>Usuário:'.$_SESSION['user'] .
                     '<br>E-mail:'.$_SESSION['mail'];

                // unset($_SESSION['user']);
                // unset($_SESSION['mail']);
            }
        ?>
    </body>
</html>

