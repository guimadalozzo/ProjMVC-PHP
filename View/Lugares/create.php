<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Lugar</title>
    </head>

    <body>
        <?php
            $user = unserialize($_SESSION['usuario']);
        ?>
        <h3><?php echo $user[0]['nome'] ?></h3>
        <form action="../../Controller/LugaresController.php?operation=cadastrar" method="post" name="form_user">
            <input required type="text" name="txtLocal" id="txtLocal" placeholder="Local" /><br><br>
            <input required type="text" name="txtPais" id="txtPais" placeholder="Pais" /><br><br>
            <input type="submit" value="Cadastrar" />
            <input type="reset" value="Limpar" />
        </form>
    </body>
</html>

