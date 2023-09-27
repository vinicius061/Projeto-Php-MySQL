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
      <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
          <td height="60"><div align="center"><font face="Arial" size="4"><b>Pesquisar por Nome e UF de Time </b></font></div></td>
      </tr>
      </table>      
     <form method="POST" action="resultadoPesquisarTermosClientes.php">
          <p><div align="left"><font face="Arial" size="2">
          <b>Selecione Código ou Nome :<br>
          <select name="timItemPesquisa">
              <option value="timID"><b>Código</option>    
              <option value="timNome"><b>Nome</option>
             
              </select><br/><br/>
          <b>Digite um Termo Conforme Item Escolhido Acima:</br>
          <input name="cliTermoPesquisa" type="text" size="40"></br>
          <input type="submit" value="Pesquisar"></font></div><br>               
     </form>
          <p><div align="center"><font face="Arial" size="2">
          <p><div align="center"><font face="Arial" size="2">
          <b><a href='menuPesquisarClientes.php'><b>Voltar Para o Menu Pesquisar Times</a><br>
          <b><a href='sair.php'>Sair do Sistema </a></font></div></p>
       </body>
</html>
