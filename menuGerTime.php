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
    <title>Gerenciamento de time </title>
</head>
<body>
    <img src="/Provaa2_30044201_31290604/imagens/time.png" width="150" height="100"><b>
    <?php
        //Exibirá o nome do usuário que está logado e a data corrente
        echo "O usuário " .$_SESSION['sessaoNome']." está logado no sistema neste momento !!!! Hoje é ".$data;
    ?></b><br/><br/>
    <table width="55%" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td>
                <table width="130%" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td width="130%"><font color="#3300FF"><b>Gerenciamento de Time</font></td>
                    </tr>
                </table>
            </td>
        </tr>
            <tr>
                <td nowrap>
                    <table width="100%" cellspacing="0" cellpadding="0" border="1">
                        <tr>
                            <ol type="1" start="1"><br/>
                                <li><a href="formIncluirTime.php"><font color="#000000"><b>Incluir</font></a>
                                <li><a href="formAlterarTime.php"><font color="#000000"><b>Alterar</font></a>
                                <li><a href="formExcluirTime.php"><font color="#000000"><b>Excluir</font></a>
                                <li><a href="menuPesquisarTime.php"><font color="#000000"><b>Pesquisar</font></a>
                            </ol>
                        </tr>
                    </table>
                </td>
            </tr>
    </table><br/>
    <div align="center"><font face="Arial" size="5">
        <a href='menuOpcoesGeral.php'><b>Voltar para o menu </a><br/>
        <a href='sair.php'><b>Sair do Sistema</a></font>
    </div>
</body>
</html>
