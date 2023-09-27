<?php
    require_once("conectarBD.php");
     //Vai verificar se a nossa sessão esta ativa
     require_once("verificar.php");
          //Função que vai exibir a data completa, dia e ano corrente
     include 'includes/exibirDia.fcn';
?>
<html>
<body>
    <img src="/Provaa2_30044201_31290604/imagens/time.png" width="150" height="100"><b>
    <?php
        //Exibirá o nome do usuário que está logado e a data corrente
        echo "O usuário " .$_SESSION['sessaoNome']." está logado no sistema neste momento !!!! Hoje é ".$data;
    ?></b><br/><br/>
    <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <td height="60"><div align="center"><font face="Arial" size="4"><b>Gerenciamento do time </b></font></div></td>
    </tr>
    </table><br>
<?php
     //A formatação do campo cliDtInclusao, para retornar a data no formato dd/MM/yyyy
     $sqlTime = mysqli_query($conexao,"SELECT timID, as timNomeMascote, timNome FROM timess".
  
     " ORDER BY timID") or die ("Não foi possível realizar a consulta.");
?>
<?php
     //Se encontrar algum registro na tabela
     if(mysqli_num_rows($sqlTime) > 0)
     {
?>
        <table width="100%" border="0" cellspacing="1" cellpadding="0" align="center">
        <tr>
            <td colspan="15"><div align="center"><font face="Arial" size="2"><b>Times Cadastrados</font></b></font></div></td>
        <tr>
        <td colspan="15"><div align="center"><font face="Arial" size="2"><b>Utilize as Teclas Ctlr+F para Encontrar o Código ou Nome do time</font></b></font></div></td>
        </tr>
        <tr><td width="5%"><div align="center"><b><font face="Arial" size="2">Código do Cliente</font></b></div></td>
            <td width="5%"><div align="center"><b><font face="Arial" size="2">Data de inclusão</font></b></div></td>
            <td width="10%"><div align="center"><b><font face="Arial" size="2">Nome do Cliente</font></b></div></td>
            <td width="20%"><div align="center"><b><font face="Arial" size="2">Endereço</font></b></div></td>
            <td width="10%"><div align="center"><b><font face="Arial" size="2">Bairro</font></b></div></td>
            <td width="10%"><div align="center"><b><font face="Arial" size="2">E-mail</font></b></div></td>
            <td width="10%"><div align="center"><b><font face="Arial" size="2">Telefone</font></b></div></td>
            <td width="10%"><div align="center"><b><font face="Arial" size="2">Cidade</font></b></div></td>
            <td width="5%"><div align="center"><b><font face="Arial" size="2">UF</font></b></div></td>
        </tr>
<?php
        //Lista os dados da tabela enquanto exisitir
        while($arrayTime = mysqli_fetch_array($sqlTime))
        {
?>
        <tr>
            <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $arrayCliente['timID'];?></font></td>
            <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $arrayCliente['timDtInclusao'];?></font></td>
            <td width="20%" height="25"><b><font face="Arial" size="2"><?php echo $arrayCliente['timNome'];?></font></td>
            <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $arrayCliente['timEndereco'];?></font></td>
            <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $arrayCliente['timBairro'];?></font></td>
            <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $arrayCliente['timEmail'];?></font></td>
            <td width="03%" height="25"><b><font face="Arial" size="2"><?php echo $arrayCliente['timTel'];?></font></td>
            <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $arrayCliente['timCidade'];?></font></td>
            <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $arrayCliente['timUF'];?></font></td>
        </tr>
<?php
        //Fecha a execução do comando mysqli_fetch_array
        }
?>
        </table>
<?php
     }//Fecha a execução do comando mysqli_num_rows > 0
     else
     {
         echo "<br><br><div align=center><font face=Arial size=2>Desculpe, mais não foram encontrados nenhum cliente<br><br></font></div>";
     }
?>
     <br><div align="center"><font face="Arial" size="2">
     <b><a href='menuPesquisarTime.php'><b>Voltar Para o Menu Pesquisar</a><br>     
     <a href='formAlterarTime.php'><b>Voltar Para Alteração de time</a><br>
     <a href='formExcluirTime.php'><b>Voltar Para Exclusão de time</a><br>
     <a href='menuGerTime.php'><b>Voltar para o menu de Opções Gerenciamento do time</a><br>
     <a href='menuOpcoesGeral.php'><b>Voltar para o menu de Opções Geral</a><br>
     <a href='sair.php'><b>Sair do Sistema</a></font></div>
     </body>
</html>
