<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Verificação de número par ou ímpar. </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 5 <p></p>- Verificação de número par ou ímpar. </h2>
    <?php 
        echo "-------------------------------------------------------------<p>";
        echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
        echo "Receba os valores via POST e apresente o resultado<p>";
        echo "-------------------------------------------------------------<p>"; 
    ?>

<?php
if (isset($_POST['n1'])) {
    $n1 = $_POST['n1'];


    if ($n1 % 2 == 0) {
        echo "Par";
    } else {
        echo "Ímpar";
    }
} else {
    echo "Por favor, envie um número.";
}
?>
<a href="exercicio5.html"><button type="button">Voltar</button></a>
</html>