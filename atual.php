<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<a  href='/CadastroSimplesSenaiPinhais/formAluno.php'>Voltar</a>
<body>
    <h1>Atualizar</h1>
    <?php
        if (isset($_POST["id"])) 
        {
            $ID = $_POST["id"];
            $conexao = new mysqli("127.0.0.1", "root", "", "formulariocrud");
            if($conexao->connect_errno) {
                echo "Ocorreu um erro na conexão com o banco de dados.";
                exit;
            }
            $conexao->set_charset("utf8");

            $sql = "SELECT * from alunomatricula WHERE id='$ID';";
            echo $sql."<br/>";
            $result = $conexao->query($sql);
            if($result->num_rows > 0) 
            {
                while ($linha = $result->fetch_assoc())
                 {
                    $nome = $linha["nome"];
                    $datanascimento = $linha["datanascimento"];
                    $nomepai = $linha["nomepai"];
                    $nomemae = $linha["nomemae"];
                    $telefone = $linha["telefone"];
                    $email = $linha["email"];
                    $sexo = $linha["sexo"];
                    $bairro = $linha["bairro"];
                }
            }
            else
             {
                echo "Sem resultados";
            }
            $conexao->close();
        }
    ?>
    <form action="att.php" method="POST">
        <label>Nome:</label>
        <input type="text" size="30" name="nome" value="<?=$nome ?>" placeholder="Qual seu nome?">
        <br/>
        <br/>
        <label>Data de Nascimento:</label>
        <input type="text" name="datanascimento" value="<?=$datanascimento ?>" placeholder="Qual sua data de nascimento?">
        <br/>
        <br/>
        <label>Nome do Pai:</label>
        <input type="text" name="nomepai" value="<?=$nomepai ?>" placeholder="Qual o nome do pai?">
        <br/>
        <br/>
        <label>Nome da Mae:</label>
        <input type="text" name="nomemae" value="<?=$nomemae ?>"  placeholder="Qual o nome da mae?">
        <br/>
        <br/>
		 <label>Telefone:</label>
        <input type="text" name="telefone" value="<?=$telefone ?>" placeholder="Qual o seu telefone?">
        <br/>
        <br/>
		 <label>E-mail:</label>
        <input type="email" name="email" value="<?=$email ?>" placeholder="Qual o seu email?">
        <br/>
        <br/>
		 <label>Sexo:</label>
                <td>
                    <input type="radio" name="sexo" value="Masculino" <?php echo ($sexo == 'Masculino') ?  "checked" : "" ;  ?>/>Masculino
                    <input type="radio" name="sexo" value="Feminino" <?php echo ($sexo == 'Feminino') ?  "checked" : "" ;  ?>/>Feminino
                </td>
        <br/>
        <br/>
		 <label>bairro:</label>
         <select name="bairro" size="1">
                        <option></option>
                        <option <?php echo ($bairro == 'Jardim Botânico') ?  "selected" : "" ;  ?>>Jardim Botânico</option>
                        <option <?php echo ($bairro == 'Jardim das Americas') ?  "selected" : "" ;  ?>>Jardim das Americas</option>
                        <option <?php echo ($bairro == 'Batel') ?  "selected" : "" ;  ?>>Batel</option>
                        <option <?php echo ($bairro == 'Cajuru') ?  "selected" : "" ;  ?>>Cajuru</option>
                        <option <?php echo ($bairro == 'Centro Cívico') ?  "selected" : "" ;  ?>>Centro Cívico</option>
                    </select>
        <br/>
        <br/>
        <input type="hidden" value="<?=$ID ?>" name="id"/>
        <button type="submit">Atualizar</button>
    </form>
    <br/>
    <br/>
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
            <a href="index.php">| Home |</a>
            <a href="formMatricula.php">| Matricula |</a>
            </div>
        
</body>
</html>