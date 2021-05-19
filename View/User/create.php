<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Usuário</title>
    </head>

    <body>
        <form action="../../Controller/UserController.php?operation=cadastrar" method="post" name="form_user">
            <input required type="text" name="txtNome" id="txtNome" placeholder="Nome" /><br><br>
            <input required type="text" name="txtSobrenome" id="txtSobrenome" placeholder="Sobrenome" /><br><br>
            <input required type="text" name="txtEmail" id="txtEmail" placeholder="E-mail" /><br><br>
            <input required type="text" name="txtIdade" id="txtIdade" placeholder="Idade" /><br><br>
            <input required type="password" name="txtSenha" id="txtSenha" placeholder="Senha" /><br><br>
            <input type="submit" value="Cadastrar" />
            <input type="reset" value="Limpar" />
        </form>
    </body>
</html>

