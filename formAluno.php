<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> CadAluno </title>
    </head>
    <body>

        <form>
            <p align="center">
                <font size="6" face="Arial"> Curso Senai Pinhais </font>  
            </p>
        </form>        

        <h4><center><font face="Arial" color="green">Formulário de Cadastro de Aluno - Rafael Monteiro Rodrigues</font></center></h4>
        <hr width="100%" align="center" size="3" color="blue">

        <h1><font face="Arial">Dados Pessoais</font></h1>

        <form method="POST" action="cadastroAluno.php" align="center">
            <table width="400" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td align="left">Nome do Aluno(a): </td>
                    <td><input type="text" size="30" name="nome"></td>
                </tr>

                <tr>
                    <td align="left">Data de Nascimento: </td>
                    <td><input type="text" size="30" name="datanascimento"></td>
                </tr>

                <tr>
                    <td align="left">Nome do Pai: </td>
                    <td><input type="text" size="30" name="nomepai"></td>
                </tr>

                <tr>
                    <td align="left">Nome da Mãe: </td>
                    <td><input type="text" size="30" name="nomemae"></td>
                </tr>

                <tr>
                    <td align="left">Telefone: </td>
                    <td><input type="text" size="30" name="telefone"></td>
                </tr>

                <tr>
                    <td align="left">E-Mail: </td>
                    <td><input type="email" size="30" name="email"></td>
                </tr>

                <tr>
                    <td align="left">Sexo: </td>
                    <td>
                        <input type="radio" name="sexo" value="Masculino">Masculino
                        <input type="radio" name="sexo" value="Feminino">Feminino
                    </td>
                </tr>               

                <tr>
                    <td align="left">Bairro: </td>
                    <td>
                        <select name="bairro" size="1">
                            <option></option>
                        <option>Água Verde</option>
                        <option>Alto da XV</option>
                        <option>Batel</option>
                        <option>Cajuru</option>
                        <option>Centro Cívico</option>
                        <option>Hauer</option>
                        <option>Jardim Botânico</option>
                        <option>Jardim das Américas</option>
                        <option>Portão</option>
                        <option>Santa Cândida</option>
                        <option>Tarumã</option>
                        </select>
                    </td>
                </tr>

            </table>

            <br>

            <input type="reset" value="Limpar Dados">

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
            <a href="index.php">| Home |</a>
            <a href="formMatricula.php">| Matricula |</a>

            <br>


        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
