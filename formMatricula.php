<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
  <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadAluno</title>
</head>
<body>
    <form>
        <p align="center">
            <font size="7" face="Arial">Curso Senai Pinhais</font>
        </p>
    </form>
    
    <h4>
        <font color="red">
            <center>Formulário de Cadastro de Matricula - Rafael Monteiro Rodrigues</center>
        </font>
    </h4>

    <hr width="100%" align="center" size="3" color="blue">
    <br>

    <h1>Dados Pessoais</h1>

    <form method="POST" action="cadMatricula.php" align="center">
        <table width="400" border="3" cellspacing="0" cellpadding="0" align="center">
            <tr>
			    <th>Nivel</th>
				<th>Turno</th>
				<th>Série</th>
				<th>* Cursos Extra Curriculares </th>
			</tr>
			
			<tr>
			    <td>
				   <input type="radio" name="grau" value="Integrado">Integrado<br>
			         <input type="radio" name="grau" value="SubSeq">Sub-Seq<br>
			     </td>
				 
				 <td align='left'>
				    <input type="radio" name="turno" value="Manha">Manhã<br>
					<input type="radio" name="turno" value="Tarde">Tarde<br>
					<input type="radio" name="turno" value="Noite">Noite<br>
			     </td>
				 
				 <td>
				      <select name="serie" size="1">
					     <option> </option>
						 <option>1°</option>
						 <option>2°</option>
						 <option>3°</option>
					 </select><br>
				 </td>
				 
				 <td align='left'>
				     <input type="checkbox" name="ExtraCurricular" value="Musica">Musica<br>
				     <input type="checkbox" name="ExtraCurricular" value="Judo">Judo<br>
				     <input type="checkbox" name="ExtraCurricular" value="Balet">Balet<br>
					 <input type="checkbox" name="ExtraCurricular" value="Pintura">Pintura<br>
					 <strong>* Escolha apenas uma opção</strong>
			
			</tr>
			
        </table>

        <br>
        <input type="reset" value="Limpar Dados">

        <hr width="100%" align="center" size="3" color="blue">

        <table width="400" border="0" cellspacing="0" cellpadding="0" align="center">
            <tr>
                <td>
                    <form method="POST" action="cadMatricula.php">
                        <center>
                            <input type="submit" value="Cadastrar Matricula">
                        </center>
                    </form>
                </td>

                <td>
                    <form method="POST" action="listarMatricula.php">
                        <center>
                            <input type="submit" value="Pesquisar Matricula">
                        </center>
                    </form>
                </td>

                <td>
                    <form method="POST" action="procurarMatricula.php">
                        <center>
                            <input type="submit" value="Consultar Matricula">
                        </center>
                    </form>
                </td>

                <td>
                    <form method="POST" action="atualizarMatricula.php">
                        <center>
                            <input type="submit" value="Atualizar Dados da Matricula">
                        </center>
                    </form>
                </td>

                <td>
                    <form method="POST" action="apagarMatricula.php">
                        <center>
                            <input type="submit" value="Excluir Dados da Matricula">
                        </center>
                    </form>
                </td>
            </tr>
			
        </table>
    </form>
	<hr width="100%" align="center" size="3" color="red">


    <nav>
        <a href="index.php">| Home |</a>
        <a href="formAluno.php">| Cadastrar Aluno|</a>
    </nav>
	
</body>
</html>
		  
  </form>
  </body>
  </html>