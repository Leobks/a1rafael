<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 - Cadastro de Alunos e Carga Horária para Atividades Complementares </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 11 <p></p>- Cadastro de Alunos e Carga Horária para Atividades Complementares </h2>
    <?php 
        echo "-------------------------------------------------------------<p>";
        echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
        echo "Receba os valores via POST e apresente o resultado<p>";
        echo "-------------------------------------------------------------<p>"; 
    ?>

<?php

include("conexao.php");

$nome=$_POST['nome'];
$matricula=$_POST['matricula'];
$curso=$_POST['curso'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$endereco=$_POST['endereco'];
$cep=$_POST['cep'];
$cidade=$_POST['cidade'];
$uf=$_POST['uf'];
$hc=$_POST['hc'];
$ch=$_POST['ch'];



$sql="INSERT INTO alunos(nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, hc, ch) 
        VALUES ('$nome', '$matricula', '$curso', '$email', '$telefone', '$endereco', '$cep', '$cidade', '$uf', '$hc', '$ch')";

if(mysqli_query ($conexao, $sql)){
    echo "Usuário cadastrado com sucesso";
}
else{
    echo "Erro".mysqli_connect_error($conexao);
}

mysqli_close($conexao);

?>
</br></br></br></br>
<a href="exercicio11.html"><button type="button">Voltar</button></a>
