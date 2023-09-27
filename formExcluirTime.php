<?php
     //Vai verificar se a nossa sessão esta ativa
     require_once("verificar.php");
     //Vai fazer a conexão com o nosso banco de dados imaginária
     require_once("conectarBD.php");
     //Função que vai exibir a data completa, dia e ano corrente
     include 'includes/exibirDia.fcn';     
?>
<html>
      <head> 
             <!-- Função que vai deixar todos os caracteres maiúsculos -->
            <Style type="text/css">
                    input.maiuscula
                    {
                       text-transform: uppercase;
                    }
            </style>        
      </head>
      <body>
      <center><img src="/Provaa2_30044201_31290604/imagens/time.png" width="150" height="100">
      <b><?php
              //vai exibir o nome do usuário que está logado e a data corrente
              echo "O Usuário " .$_SESSION['sessaoNome']." está logado no sistema neste momento!!!! Hoje é ".$data;              
         ?></b>
      <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
          <td height="60"><div align="center"><font face="Arial" size="4"><b>Dados Do Time</b></font></div></td>
      </tr>
      </table>      
<?php
     if (!isset($_POST["timID"])&& !isset($_POST["enviar"]))
     {
?>
     <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
           <p>Código do time: <input type="text" name="timID" size="10">
           <input type="submit" value="Excluir Dados do Time" name="excluir"></p>
           <div align="left"><font face="Arial" size="2"><b>Não Lembra o Código?<a href='pesqTodosClientes.php'> Clique Aqui </a><br></font></div>
     </form>
<?php
     }
     //Vai buscar dados do Cliente
     else if(!isset($_POST["enviar"])) 
     {
          $timID = $_POST["timID"];
          $consulta = mysqli_query($conexao, "SELECT timID, timNome, timNomeMascote FROM timess WHERE timId = '$timID'");
          
        //obtem a resposta do Select executado acima
        $linha = mysqli_num_rows($consulta);
     if ($linha == 0) //verifica quantas linhas teve a query executada, se for igual a zero o cliente nao foi encontrado
     {
          echo "Time não encontrado $timID";
     }
     else
     {
          echo "<div><font face=Arial size=4><b>Time Encontrado:</b></font></div>";
          //seta a linha de campoCliente da tabela clientes e depois coloca cada campo em uma variavel
          
          $campoTime = mysqli_fetch_row($consulta);
          $timNome = $campoTime[1];
          $timNomeMascote= $campoTime[2];

          //Esta função vai gravar os caracteres maiúsculos no MySql
               
                    
?>
          <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
          <table width="100%" border="0" cellspacing="1" cellpadding="0" align="center">
             <tr bgcolor="#6699CC">
                 <td colspan="15"><div align="center"><font face="Arial" size="2"><b><font color="#FFFFFF">Times cadastrados</font></b></font></div></td>
             </tr>
             <tr><td width="5%"><div align="center"><b><font face="Arial" size="2">Código do time</font></b></div></td>
                 <td width="5%"><div align="center"><b><font face="Arial" size="2">Nome Do Mascote</font></b></div></td>
                 <td width="5%"><div align="center"><b><font face="Arial" size="2">Nome do Time</font></b></div></td>
          
             </tr>
             <tr>
                 <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $timID;?></font></td>
                 <td width="10%" height="25"><b><font face="Arial" size="2"><?php echo $timNomeMascote;?></font></td>
                 <td width="20%" height="25"><b><font face="Arial" size="2"><?php echo $timNome;?></font></td>
               
             </tr>
          </table>
          <input type ="hidden" name="timID" value="<?php echo $timID;?>">
          <input type ="hidden" name="enviar" value="S">
          <input type ="submit" value="Deseja Realmente Excluir nome do time?" name="excluir"></p>
          </form>
<?php
          mysqli_close($conexao);
     }
     }
     else
     // Excluir Cliente
     {
          $timID = $_POST["timID"];
          $deleta = mysqli_query($conexao, "DELETE FROM timess WHERE timID = '$timID'");
          //O comando mysqli_affected_rows(), vai retornar a quantidade de linhas alteradas com o comando DELETE
          if (mysqli_affected_rows($conexao)>0)
          {
             echo "<p align='center'>Dados do Time foram excluídos com sucesso!!!</p>";              
          }
          else
          {
              $erro=mysqli_error($conexao);
              echo "<p align='center'>Erro:$erro</p>";
          }
              mysqli_close($conexao);
          }
?>
          <p><div align="center"><font face="Arial" size="2">
          <p><div align="center"><font face="Arial" size="2">
          <b><a href='menuOpcoesGeral.php'>Voltar para o menu de Opções Geral</a><br>
          <b><a href='sair.php'>Sair do Sistema </a></font></div></p>
       </body>
</html>
