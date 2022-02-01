<!DOCTYPE html>
<html lang="pt-br">
   <head>
	
      <title>Procura</title>
	  <style type="text/css">
	  body
	  {
		  font-family: Arial;
	  }
	  label
	  {
		  display: inline-block;
		  width:60px;
	  }
	  </style>
	   </head>
	   <body>
	   <form action="encontrar.php" method="POST">
	   <label>Nome:</label>
	   <input type="text" name="nome" placeholder="Qual seu nome?"/>
	   <br/>
	   <br/>
	   <button type="submit">Procurar</button>
	  </form>
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
	
		<div align="center">
		<a  href='/CrudPHP/formAluno.php'>Voltar</a>
        <a  href="index.php">| Home |</a>
		<a  href="formMatricula.php">| Matricula |</a>
		<hr>
	</div>
    </nav>
	
   </body>
</html>   