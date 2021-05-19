<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tela de Login</title>
    </head>

    <body>
        <form action="../../Controller/AuthController.php?operation=login" method="post" name="form_user">
            <input required type="text" name="txtEmail" id="txtEmail" placeholder="E-mail" /><br><br>
            <input required type="password" name="txtSenha" id="txtSenha" placeholder="Senha" /><br><br>
            <input type="submit" value="Login" />
            <input type="reset" value="Limpar" />
        </form>
    </body>
</html>

