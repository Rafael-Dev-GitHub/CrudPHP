<!DOCTYPE html>
<html>
<head>
<title>Lista dos Clientes</title>
</head>
<body>
   <h1>Lista dos Clientes</h1>
   <table border>
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
       $conexao = new mysqli("127.0.0.1", "root", "", "crudphp");
	   if ($conexao->connect_errno)
	   {
		   echo "Ocorreu um erro na conexão com o Banco de dados.";
		   exit;
	   }
	   $conexao->set_charset("utf8"); // Acertar acentuação
	   
	   $sql = "SELECT * from cliente";
	   echo $sql."<hr><br/>";
	   $result = $conexao->query($sql);
	   if ($result->num_rows > 0)
	   {
		   while ($linha = $result->fetch_assoc())
		   {
			   echo "<tr>";
			   echo "<td>".$linha["Id"]."</td>";
			   echo "<td>".$linha["nome"]."</td>";
			   echo "<td>".$linha["email"]."</td>";
			   echo "<td>".$linha["cidade"]."</td>";
			   echo "<td>".$linha["uf"]."</td>";
			   echo "</tr>";
			   
		   }
	   } else
	   {
		   echo "Sem resultados";
	   }
	   $conexao->close();
	   
	  ?>
	  
	  </table>
	  <br><br><br>
	<a href='listar2.php'>Pesquisar 2</a>
	<a href="listar.php">Pesquisar</a>
	<a href="procurar.php">Procurar</a>
	<a href="atualizar.php">Atualizar Dados</a>
	<a href='/SenaiPinhaisFormularios/formulario.php'>Menu Cadastrar</a>
	  <?php
	  echo "<hr>";
	  	   echo "<a href='/SenaiPinhaisFormularios/formulario.php'>Voltar</a>";

	  ?>
	 </body>
	 </html>