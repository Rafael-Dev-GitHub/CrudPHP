<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar</title>
</head>
<body>
    <h1>Elimina</h1>
    <?php
        if (isset($_POST["ID"])) {
            $ID = $_POST["ID"];
            $conexao = new mysqli("127.0.0.1", "root", "", "formulariocrud");
            if($conexao->connect_errno) {
                echo "Ocorreu um erro na conexão com o banco de dados.";
                exit;
            }
            $conexao->set_charset("utf8");

            $sql = "DELETE FROM alunomatricula WHERE id=$ID;";
            echo $sql."<br/>";
            if ($conexao->query($sql) === TRUE){
				 echo "Removido com sucesso";
			} else {
				echo "Erro: " . $sql . "<br>" . $conexao->error;
			}
			$conexao->close();
			}
    ?>
   
        <a href="apagar.php">Voltar</a>
		 <br/>
    <br/>
    <a href="listar2.php">Pesquisar 2</a>
        <a href="listar.php">Pesquisar </a>
        <a href="procurar.php">Procurar</a>
        <a href="atualizar.php">Atualizar</a>
		<a href='/SenaiPinhaisFormularios/formulario.php'>Menu Cadastrar</a>
    </form>
</body>
</html>