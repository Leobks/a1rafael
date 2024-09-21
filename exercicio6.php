<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 - Impressão de valores em ordem crescente. </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 6 <p></p>- Impressão de valores em ordem crescente. </h2>
    <?php 
        echo "-------------------------------------------------------------<p>";
        echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
        echo "Receba os valores via POST e apresente o resultado<p>";
        echo "-------------------------------------------------------------<p>"; 
    ?>

<?php
if (isset($_POST['n1']) && isset($_POST['n2'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    
    if ($n1 < $n2) {
        echo "Ordem crescente: $n1, $n2";
    } elseif ($n2 < $n1) {
        echo "Ordem crescente: $n2, $n1";
    } else {
        echo "Os números são iguais: $n1, $n2";
    }
} else {
    echo "Por favor, insira os dois números.";
}
?>

<a href="exercicio6.html"><button type="button">Voltar</button></a>
</html>