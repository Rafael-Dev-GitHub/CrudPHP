<?php

//Validando a exitência dos dados
if (isset($_POST["nome"]) && isset($_POST["datanascimento"]) && isset($_POST["nomepai"]) && isset($_POST["nomemae"]) && isset($_POST["telefone"]) && isset($_POST["email"]) && isset($_POST["sexo"]) && isset($_POST["bairro"])) {
    if (empty($_POST["nome"])) {
        $erro = "Campo nome obrigatório";
    } else
    if (empty($_POST["datanascimento"])) {
        $erro = "Campo data de nascimento obrigatório";
    } else
    if (empty($_POST["nomepai"])) {
        $erro = "Campo nome do pai obrigatório";
    } else
    if (empty($_POST["nomemae"])) {
        $erro = "Campo da mãe obrigatório";
    } else
    if (empty($_POST["telefone"])) {
        $erro = "Campo telefone obrigatório";
    } else
    if (empty($_POST["email"])) {
        $erro = "Campo e-mail obrigatório";
    } else {
        $conexao = new mysqli("127.0.0.1", "root", "", "formulariocrud");
        if ($conexao->connect_errno) {
            echo "Ocorreu um erro na conexão com o banco de dados.";
            exit;
        }
        //Vamos realizar o cadastro ou alteração dos dados enviados.
        $nome = $_POST["nome"];
        $datanascimento = $_POST["datanascimento"];
        $nomepai = $_POST["nomepai"];
        $nomemae = $_POST["nomemae"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $sexo = $_POST["sexo"];
        $bairro = $_POST["bairro"];

        $stmt = $conexao->prepare("INSERT INTO `alunomatricula`(`nome`,`datanascimento`,`nomepai`,`nomemae`,`telefone`,`email`,`sexo`,`bairro`) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param('ssssssss', $nome, $datanascimento, $nomepai, $nomemae, $telefone, $email, $sexo, $bairro);

        if (!$stmt->execute()) {
            $erro = $stmt->error;
        } else {

            $sucesso = "<font size='3' face='Arial'><center>Dados cadastrados com sucesso</center></font>";
			echo "<a href='/CadastroSimplesSenaiPinhais/formAluno.php'>Voltar</a>";
        }
    }
}
if (isset($erro)) {
    echo '<div style="color:#F00">' . $erro . '</div><br/><br/>';
}
if (isset($sucesso)) {
    echo '<div style="color:#00F">' . $sucesso . '</div><br/><br/>';
}
?>