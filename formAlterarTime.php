<?php
    require_once("conectarBD.php");
    //Verificará se a nossa sessão está ativa
    require_once("verificar.php");
    //A função que exibirá a data completa, dia e ano corrente
    include 'includes/exibirDia.fcn';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Times</title>
</head>
<body>
    <img src="/Provaa2_30044201_31290604/imagens/time.png" width="150" height="100"><b>
    <?php
        //Exibirá o nome do usuário que está logado e a data corrente
        echo "O usuário " .$_SESSION['sessaoNome']." está logado no sistema neste momento !!!! Hoje é ".$data;
    ?></b><br/><br/>
    <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
        <td height="60"><div align="center"><font face="Arial" size="4"><b>Alterar Dados Do Time</b></font></div></td>
        </tr>
    </table>
    <?php
        if (!isset($_POST["timID"])&& !isset($_POST["enviar"]))
        {
    ?>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <p>Código do Time: <input type="text" name="timID" size="10">
            <input type="submit" value="Alterar Dados do time" name="alterar"></p>
            <div align="left"><font face="Arial" size="2"><b>Não Lembra o Código?<a href='pesqTodosTimes.php'> Clique Aqui </a><br/></font></div>
        </form>
        <?php
        }
        //Buscará os dados do Cliente
        else if(!isset($_POST["enviar"]))
        {
            $timID = $_POST["timID"];
            $consulta = mysqli_query($conexao, "SELECT timID, timNome, timNomeMascote FROM timess WHERE timID = '$timID'");
            //obtém a resposta do Select executado acima
            $linha = mysqli_num_rows($consulta);
            if ($linha == 0) //verifica quantas linhas teve a query executada e se for igual a zero, o cliente não foi encontrado
        {
            echo "Time não encontrado $timID";
        }
        else
        {
            echo "<div><font face=Arial size=4><b>Cliente Encontrado:</b></font></div>";
            //seta a linha de campoCliente da tabela clientes e depois, coloca cada campo em uma variável.
            $campoTime = mysqli_fetch_row($consulta);
            $timNome = $campoTime[1];
            $timNomeMascote = $campoTime[2];
            
        ?>
            <form name="formTimes" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <table width="100%" border="0" cellspacing="1" cellpadding="0" align="center">
                <tr>
                    <td colspan="15"><div align="center"><font face="Arial" size="2"><b><font color="#FFFFFF">Times Cadastrados</font></b></font></div></td>
                </tr>
                <tr><td width="5%"><div align="center"><b><font face="Arial" size="2">Código do Time</font></b></div></td>
                    <td width="5%"><div align="center"><b><font face="Arial" size="2">Nome</font></b></div></td>
                    <td width="5%"><div align="center"><b><font face="Arial" size="2">NomeMascote</font></b></div></td>

                </tr>
                <tr>
                    <td width="100%" height="25"><b><font face="Arial" size="2"><?php echo $timID;?></font></td>
                    <td width="70%" height="25"><b><font face="Arial" size="2"><input type="text" name="timNome" size="10" value="<?php echo $timNome;?>"></font></td>
                    <td width="50%" height="25"><b><font face="Arial" size="2"><input type="text" name="timNomeMascote" size="42" value="<?php echo $timNomeMascote;?>"></font></td>

                </tr>
            </table>
            <input type ="hidden" name="timID" value="<?php echo $timID;?>">
            <input type ="hidden" name="enviar" value="S">
            <input type ="submit" value="Alterar Dados do Time" name="alterar"></p>
            </form>
            <?php
                mysqli_close($conexao);
        }
        }
        else // alterar cliente
        {
            $timID=$_POST["timID"];
            $timNome=$_POST["timNome"];
            $timNomeMascote=$_POST["timNomeMascote"];

            $altera = mysqli_query($conexao, "UPDATE timess SET timNome='$timNome', timNomeMascote='$timNomeMascote' WHERE timID='$timID'");

            //O comando mysqli_affected_rows( ) retornará a quantidade de linhas alteradas com o comando UPDATE
            if (mysqli_affected_rows($conexao) > 0)
            {
                echo "<p align='center'>Dados do Time $timNome alterados com sucesso!!! Verifique abaixo a alteração feita.</p>";
                echo "<table width='100%' border='0' cellspacing='1' cellpadding='0' align='center'>";
                    echo "<tr>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td width='10%'><div align='center'><b><font face='Arial'csize='2'>Código do Cliente</font></b></div></td>";
                        echo "<td width='10%'><div align='center'><b><font face='Arial' size='2'>Data de inclusão</font></b></div></td>";
                        echo "<td width='20%'><div align='center'><b><font face='Arial' size='2'>Cliente</font></b></div></td>";
                        echo "<td width='10%'><div align='center'><b><font face='Arial' size='2'>Endereço</font></b></div></td>";
                        echo "<td width='10%'><div align='center'><b><font face='Arial' size='2'>Bairro</font></b></div></td>";
                        echo "<td width='10%'><div align='center'><b><font face='Arial' size='2'>E-mail</font></b></div></td>";
                        echo "<td width='03%'><div align='center'><b><font face='Arial' size='2'>Telefone</font></b></div></td>";
                        echo "<td width='10%'><div align='center'><b><font face='Arial' size='2'>Cidade</font></b></div></td>";
                        echo "<td width='10%'><div align='center'><b><font face='Arial' size='2'>UF</font></b></div></td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td width='10%' height='25'><b><font face='Arial' size='2'>$timID</font></td>";
                        echo "<td width='20%' height='25'><b><font face='Arial' size='2'>$timNome</font></td>";
                        echo "<td width='10%' height='25'><b><font face='Arial' size='2'>$timNomeMascote</font></td>";
 
                    echo "</tr>";
                echo "</table>";
            }
            else
            {
                $erro=mysqli_error($conexao );
                echo "<p align='center'>Erro:$erro</p>";
            }
        mysqli_close($conexao);
    }
?>
    <p><div align="center"><font face="Arial" size="2"><b><a href='formIncluirClientes.php'><b>Voltar para a Inclusão de Times</a><br/>
    <b><a href='formAlterarTime.php'><b>Voltar para a Alteração de times</a><br/>
    <b><a href='formExcluirTime.php'><b>Voltar para a Exclusão de times</a><br/>
    <b><a href='menuPesquisarTime.php'><b>Voltar para a Pesquisa de times</a><br/>
    <b><a href='menuGerTime.php'><b>Voltar para o menu de Opções Gerenciamento de times</a><br/>
    <b><a href='menuOpcoesGeral.php'><b>Voltar para o menu de Opções Gerais</a><br/>
    <b><a href='sair.php'><b>Sair do Sistema </a></font></div>
</body>
</html>
