<?php
    require_once("conectarBD.php");
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
    <title>Bicicletaria Imaginária - BIL</title>
</head>
<body>
    <img src="/Provaa2_30044201_31290604/imagens/time.png" width="150" height="100"><b>
    <?php
        //Exibirá o nome do usuário que está logado e a data corrente
        echo "O usuário " .$_SESSION['sessaoNome']." está logado no sistema neste momento !!!! Hoje é ".$data;
    ?></b><br/><br/>
    <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td height="60"><div align="center"><font face="Arial" size="4"><b>Cadastro de Clientes - BIL</b></font></div></td>
        </tr>
    </table><br/>
    <?php
        //Recebe os dados digitados no formulário de cadastro de clientes via método POST
      
        $nomeTim = $_POST["timNome"];
        $nomeMascoteTim = $_POST["timNomeMascote"];
        
        //O comando SQL que gravará os dados dos clientes na tabela clientes. Observem que estamos utilizando o comando str_to_date no campo $dtInclusao para que o usuário possa digitar a data no formato dd/mm/aaaa
        $sql = mysqli_query($conexao, "INSERT INTO timess (timNome, timNomeMascote) VALUES ('$nomeTim', '$nomeMascoteTim')") or die("Erro no comando SQL!!!<br/> <b><a href='formIncluirClientes.php'><b>Voltar Para a Inclusão de Clientes</a><br/>".mysqli_error($conexao));

        echo "<div align=center>Os dados do Cliente $nomeTim foram cadastrados com sucesso!!! Veja abaixo os dados cadastrados.<br/><br/>";
        echo "<table class='striped'>";
        echo "<tr>";
        echo "<th><div>Data de inclusão</div></th>";
        echo "<th><div>Time></div></th>";
        echo "<th><div>NomeMascote</div></th>";
        
        
        echo "</tr>";
        echo "<tr>";
          

        echo "<td>$nomeTim</font></td>";
        
        echo "<td>$nomeMascoteTim</font></td>";
        echo "</tr>";
        echo "</table><br/>";
        echo "<div align='center'><font face='Arial' size='2'>";
        echo "<b><a href='formIncluirClientes.php'><b>Voltar para a Inclusão de Clientes</a><br/>";
        echo "<b><a href='formAlterarClientes.php'><b>Voltar para a Alteração de Clientes</a><br/>";
        echo "<b><a href='formExcluirClientes.php'><b>Voltar para a Exclusão de Clientes</a><br/>";
        echo "<b><a href='menuPesquisarClientes.php'><b>Voltar para a Pesquisa de Clientes</a><br/>";
        echo "<b><a href='menuGerClientes.php'><b>Voltar para o menu de Opções Gerenciamento de Clientes</a><br/>";
        echo "<b><a href='menuOpcoesGeral.php'><b>Voltar para o menu de Opções Gerais</a><br/>";
        echo "<b><a href='sair.php'><b>Sair do Sistema IPIL</a></font></div>";
    ?>
</body>
</html>
