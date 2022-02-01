<!DOCTYPE html>
<html>
<head>
<title>Listar</title>
</head>
<body>
   <h1>Encontrar</h1>
   <?php 
       if(isset($_POST["nome"]))
	   {
		   $nome=$_POST["nome"];
		   $conexao = new mysqli("127.0.0.1", "root", "","formulariocrud");
	   if ($conexao->connect_errno)
	   {
		   echo "Ocorreu um erro na conexão com o Banco de dados.";
		   exit;
	   }
	   $conexao->set_charset("utf8"); // Acertar acentuação
	   
	   $sql = "SELECT * FROM alunomatricula WHERE nome='$nome';";
	   echo $sql."<br/>";
	   $result = $conexao->query($sql);
	   if ($result->num_rows > 0)
	   {
		   while ($linha = $result->fetch_assoc())
		   {
			   echo "Nome: ".$linha["nome"]."<br/>";
               echo "Data de Nascimento: ".$linha["datanascimento"]."<br/>";
			   echo "Nome do Pai: ".$linha["nomepai"]."<br/>";
			   echo "Nome da Mae: ".$linha["nomemae"]."<br/>";
               echo "Telefone: ".$linha["telefone"]."<br/>";
			   echo "E-mail: ".$linha["email"]."<hr><br/>";
			   echo "Sexo: ".$linha["sexo"]."<br/>";
			   echo "Bairro: ".$linha["bairro"]."<hr><br/>";
		   }
	   } else
		    
	   {
		   echo "Sem resultados";
		  
		   
	   }
	   
	   $conexao->close();
	    echo "<a href='/CadastroSimplesSenaiPinhais/formAluno.php'>Voltar</a>";
			   echo "<br/>"; echo "<br/>";
			   	  	   echo "<a href='/CadastroSimplesSenaiPinhais/index.php'>Tela Inicial</a>";

	   }
	   	  	 


	  ?>
	  
	 </body>
	 </html>