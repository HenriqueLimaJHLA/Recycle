<?php

$nome = $_POST['NomeCliente'];
$email = $_POST['EmailCliente'];

/* altere aqui as perguntas do forms*/
$pergunta1 = $_POST['diretivas'];
$pergunta2 = $_POST['WEEE_ROHS'];
$pergunta3 = $_POST['Lei_Federal'];
$pergunta4 = $_POST['Logística_Reversa'];

// camada de conexão
include_once("conexao.php");

/* aqui são as variaveis das novas perguntas */
$sql = "INSERT INTO cadastro VALUES ";
$sql .= "('$nome','$email','$pergunta1','$pergunta2','$pergunta3','$pergunta4')";
 
/* aqui conexão com o banco*/
mysqli_query($conexao,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conexao);
echo "Aviso cadastrado com sucesso!";