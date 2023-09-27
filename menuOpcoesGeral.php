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
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td>
            <table width="83%" cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td width="50%"><font color="#000000"><b>Menu de
                    Opções</font></td>
                </tr>
            </table></td>
        </tr>
        <tr>
            <td nowrap>
                <table width="10%" cellspacing="0" cellpadding="0" border="0">
                    <tr><a href="form_clientes.php"><font color="#000000"><b>
                        <ol type="1" start="1">
                            <li><a href="menuGerTime.php"><font color="#000000"><b>Gerenciamento de Times</font></a>
                            
                        </ol>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body><br/>
    <div align="center"><font face="Arial" size="5" > <font color="#000000"><b>
    <a href='sair.php'>Sair do Sistema</a></font></div>
</html>
