<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar</title>
    <style type="text/css">
        body {
            font-family: Arial;
        }
        label {
            display: inline-block;
            width: 60px;
        }
    </style>
</head>
<body>
    <form action="apaga.php" method="POST">
        <label>ID:</label>
        <input type="text" name="ID" placeholder="Qual seu ID?"/>
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
</body>
</html>