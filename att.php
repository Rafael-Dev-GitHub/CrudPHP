<?php
    if (isset($_POST["nome"]) && isset($_POST["datanascimento"]) && isset($_POST["nomepai"]) && isset($_POST["nomemae"])
    && isset($_POST["telefone"]) && isset($_POST["email"]) && isset($_POST["sexo"]) && isset($_POST["bairro"]))
     {
        if(empty($_POST["nome"])) {
            $erro = "Campo nome obrigatório";
        } else if (empty($_POST["datanascimento"])) {
            $erro = "Campo data de nascimento obrigatório";
        }
        else if (empty($_POST["nomepai"])) {
            $erro = "Campo nome do pai obrigatório";
        }
        else if (empty($_POST["nomemae"])) {
            $erro = "Campo nome da mae obrigatório";
        }
        else if (empty($_POST["telefone"])) {
            $erro = "Campo do telefone obrigatório";
        }
        else if (empty($_POST["email"])) {
            $erro = "Campo de email obrigatório";
        }
        else if (empty($_POST["bairro"])) {
            $erro = "Campo de selecionar bairro obrigatório";
        }
            else {
                $conexao = new mysqli("127.0.0.1", "root", "", "formulariocrud");
                if($conexao->connect_errno) 
                {
                    echo "Ocorreu um erro na conexão com o banco de dados.";
                    exit;
                }

                $nome = $_POST["nome"];
                $datanascimento = $_POST["datanascimento"];
                $nomepai = $_POST["nomepai"];
                $nomemae = $_POST["nomemae"];
                $telefone = $_POST["telefone"];
                $email = $_POST["email"];
                $sexo = $_POST["sexo"];
                $bairro = $_POST["bairro"];
                $id = $_POST["id"];

                $sql = "UPDATE `alunomatricula` SET nome = '$nome',
                datanascimento = '$datanascimento',
                 nomepai = '$nomepai',
                nomemae = '$nomemae', 
                telefone = '$telefone',
                 email = '$email', 
                 sexo = '$sexo', 
                 bairro = '$bairro' WHERE id='$id';";
                echo $sql."<br/>";
                if ($conexao->query($sql) === TRUE) {
                    $sucesso = "Alterado com sucesso";
                }
                else {
                    $erro = "Erro: ". $sql . "<br>". $conexao->error;
                }
                $conexao->close();
            }
        }

        if (isset($erro)) {
            echo '<div style="color:#F00">'.$erro.'</div><br/><br/>';
        }
        if (isset($sucesso)) {
            echo '<div style="color:#00F">'.$sucesso.'</div><br/><br/>';
        }
        echo "<a href='atualizar.php'>Voltar</a>";
    
?>