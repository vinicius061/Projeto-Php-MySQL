<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin time</title>
</head>
<body>
    <img src="/Provaa2_30044201_31290604/imagens/time.png" width="150" height="100">
    <form name="formAutentica" method="post" action="autenticar.php">
    <table border="0" cellpadding="0" cellspacing="3" width="50%">
        <tr>
            <td width="1%">Usuário:</td>
            <td width="40%"><input type="text" name="indexUsuario" size="25" required></td>
        </tr>
        <tr></tr>
        <tr>
            <td width="1%">Senha:</td>
            <td width="40%"><input type="password" name="indexSenha" size="10" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="btnEntrar" value="Entrar no Sistema"></td>
        </tr>
    </table>
    </form>
</body>
</html>
