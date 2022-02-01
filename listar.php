<!DOCTYPE html>
<html>
<head>
<title>Lista dos Clientes</title>
</head>
<body>
<a href='/CrudPHP/formAluno.php'>Voltar</a>
   <h1>Lista dos Clientes</h1>
   <table border="3">
   <tr>
      <th>ID</th>
	   <th>NomeAluno</th>
	    <th>Data de Nascimento</th>
		 <th>Nome do Pai</th>
		  <th>Nome da Mãe</th>
		   <th>Telefone</th>
		    <th>E-mail</th> 
			 <th>Sexo</th>
		    <th>Bairro</th> 
   <?php 
       $conexao = new mysqli("127.0.0.1", "root", "", "formulariocrud");
	   if ($conexao->connect_errno)
	   {
		   echo "Ocorreu um erro na conexão com o Banco de dados.";
		   exit;
	   }
	   $conexao->set_charset("utf8"); // Acertar acentuação
	   
	   $sql = "SELECT * from alunomatricula";
	   echo $sql."<hr><br/>";
	   $result = $conexao->query($sql);
	   if ($result->num_rows > 0)
	   {
		   while ($linha = $result->fetch_assoc())
		   {
			   echo "<tr>";
			   echo "<td>".$linha["id"]."</td>";
			   echo "<td>".$linha["nome"]."</td>";
			   echo "<td>".$linha["datanascimento"]."</td>";
			   echo "<td>".$linha["nomepai"]."</td>";
			   echo "<td>".$linha["nomemae"]."</td>";
			   echo "<td>".$linha["telefone"]."</td>";
			   echo "<td>".$linha["email"]."</td>";
			     echo "<td>".$linha["sexo"]."</td>";
			   echo "<td>".$linha["bairro"]."</td>";

			   echo "</tr>";
			   
		   }
	   } else
	   {
		   echo "Sem resultados";
	   }
	   $conexao->close();
	   
	  ?>
	  
	  </table>
	  <hr width="100%" align="center" size="3" color="blue">
	  <table width="400" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td>
                        <form method="POST" action="cadastroAluno.php">
                            <center>
                                <input type="submit" value="Cadastrar Aluno">
                            </center>
                        </form>
                    </td>

                    <td>
                        <form method="POST" action="listar.php">
                            <center>
                                <input type="submit" value="Pesquisar Aluno">
                            </center>
                        </form>
                    </td>

                    <td>
                        <form method="POST" action="procurar.php">
                            <center>
                                <input type="submit" value="Consultar Aluno">
                            </center>
                        </form>
                    </td>

                    <td>
                        <form method="POST" action="atualizar.php">
                            <center>
                                <input type="submit" value="Atualizar Dados do Aluno">
                            </center>
                        </form>
                    </td>

                    <td>
                        <form method="POST" action="apagar.php">
                            <center>
                                <input type="submit" value="Excluir Dados do Aluno">
                            </center>
                        </form>
                    </td>
                </tr>
            </table>
			<hr width="100%" align="center" size="3" color="red">


    <nav align="center">
        <a href="index.php">| Home |</a>
        <a href="formAluno.php">| Cadastrar Aluno|</a>
    </nav>
	  <?php
	  echo "<hr>";
	  	

	  ?>
	 </body>
	 </html>