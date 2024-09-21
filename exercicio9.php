<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 - Verificação de maioridade. </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 9 <p></p>- Verificação de maioridade. </h2>
    <?php 
        echo "-------------------------------------------------------------<p>";
        echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
        echo "Receba os valores via POST e apresente o resultado<p>";
        echo "-------------------------------------------------------------<p>"; 
    ?>

<?php
if (isset($_POST['name']) && isset($_POST['age'])) {
    
    $name = $_POST['name'];
    $age = $_POST['age'];

   
    if ($age >= 18) {
        echo "$name é maior de idade e tem $age anos.";
    } else {
        echo "$name não é maior de idade e tem $age anos.";
    }
} else {
    echo "Por favor, preencha seu nome e idade.";
}
?>


<a href="exercicio9.html"><button type="button">Voltar</button></a>
</html>