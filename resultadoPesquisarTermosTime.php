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
          <td height="60"><div align="center"><font face="Arial" size="4"><b>Pesquisar Clientes por Termos de Pesquisa - BIL</b></font></div></td>
      </tr>
      </table><br>
<?php
     //Recebe os dados digitados no formulário de cadastro de clientes via método POST
      $timItemPesquisa = $_POST["timItemPesquisa"];
      $timTermoPesquisa = $_POST["timTermoPesquisa"];
      
      //Elimina os espaços em branco digitados pelo usuário através do comando trim
      $timItemPesquisa = trim($timItemPesquisa);
      
      $sqlCliente = mysqli_query($conexao,"SELECT * FROM timess WHERE ".$timItemPesquisa." LIKE '%".$timTermoPesquisa."%'"
      //Ordena pelo número do código do cliente
      ." ORDER BY timID") or die ("Não foi possível realizar a consulta !!!!");
      
?>
<?php
     //Se encontrar algum registro na tabela
     if(mysqli_num_rows($sqlCliente) > 0)
     {
?>
        <table width="100%" border="0" cellspacing="1" cellpadding="0" align="center">
        <tr>
            <td colspan="15"><div align="center"><font face="Arial" size="2"><b>Clientes Pesquisados</font></b></font></div>
            </td>
        <tr>
            <td width="5%"><div align="center"><b><font face="Arial" size="2">Código do Cliente</font></b></div></td>
            <td width="5%"><div align="center"><b><font face="Arial" size="2">Nome Do Time</font></b></div></td>
            <td width="10%"><div align="center"><b><font face="Arial" size="2">Nome do Mascote</font></b></div></td>

        </tr>
<?php
        //Lista os dados da tabela enquanto existir
        while($arrayCliente = mysqli_fetch_array($sqlCliente))
        {
?>
        <tr>
            <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $arrayCliente['timID'];?></font></td>
           
            <td width="20%" height="25"><b><font face="Arial" size="2"><?php echo $arrayCliente['timNome'];?></font></td>
            <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $arrayCliente['timNomeMascote'];?></font></td>
           

        
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
         echo "<br><br><div align=center><font face=Arial size=2>Desculpe, mais não foram encontrados nenhum cliente !!!!<br><br></font></div>";
     }
?>
     <br><div align="center"><font face="Arial" size="2">
     <b><a href='menuPesquisarClientes.php'><b>Voltar Para o Menu Pesquisar Clientes</a><br>     
     <b><a href='formAlterarClientes.php'><b>Voltar Para Alteração de Clientes</a><br>
     <b><a href='formExcluirClientes.php'><b>Voltar Para Exclusão de Clientes</a><br>
     <b><a href='menuGerClientes.php'><b>Voltar para o menu de Opções Gerenciamento de Clientes</a><br>
     <b><a href='menuOpcoesGeral.php'><b>Voltar para o menu de Opções Geral</a><br>
     <b><a href='sair.php'><b>Sair do Sistema IPIL</a></font></div>
     </body>
</html>
