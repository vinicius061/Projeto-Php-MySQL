<?php
    //Verificará se a nossa sessão está ativa
    require_once("verificar.php");
    //A função que exibirá a data completa, dia e ano corrente
    include 'includes/exibirDia.fcn';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIME</title>
</head>
<body>
    <img src="/Provaa2_30044201_31290604/imagens/time.png" width="150" height="100"><b>
    <?php
        //Exibirá o nome do usuário que está logado e a data corrente
        echo "O usuário " .$_SESSION['sessaoNome']." está logado no sistema neste momento !!!! Hoje é ".$data;
    ?></b><br/><br/>
    <table width="60%" border="2" cellspacing="0" cellpadding="2" align="center">
        <tr>
            <td height="60"><div align="center"><font face="Arial" size="4"><b>Cadastro de time </b></font></div></td>
        </tr>
    </table>    
    <form name="formTimes" id="formTimes" method="POST" action="incluirTimes.php">
    <table width="35%" border="0" cellspacing="0" cellpadding="0">
      
        <tr>
            <td width="24%" height="25">Nome:</td>
            <td height="25" width="76%"><input type="text" name="timNome" required></td>
        </tr>
        <tr>
            
            
        </tr>
        <tr>
            <td height="25" width="24%"><font face="Arial" size="2">NomeMascote:</
            font></td>
            <td height="25" width="76%"><input type="text" name="timNomeMascote" required></td>
        </tr>
        
            
    <td height="25" colspan="2">
        <div>
                <input type="submit" name="cadCliente" value="Cadastrar Time">
        </div></td>
    </tr>
    </table>
    </form>
</body>
    <div align="center">
        <a href='sair.php'>Sair do Sistema</a>
    </div>
</body>
</html>
