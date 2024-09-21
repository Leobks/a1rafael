<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 - Comparação de valores A e B. </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 7 <p></p>- Comparação de valores A e B. </h2>
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

    
    if ($n1 > $n2) {
        echo "$n1 é maior que $n2";
    } elseif ($n2 > $n1) {
        echo "$n2 é maior que $n1";
    } else {
        echo "Os números são iguais!";
    }
} else {
    echo "Por favor, insira os dois números.";
}
?>

<a href="exercicio7.html"><button type="button">Voltar</button></a>
</html>