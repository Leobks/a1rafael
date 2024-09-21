<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8 - Cálculo da média final de um aluno SGA. </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 8 <p></p>- Cálculo da média final de um aluno SGA. </h2>
    <?php 
        echo "-------------------------------------------------------------<p>";
        echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
        echo "Receba os valores via POST e apresente o resultado<p>";
        echo "-------------------------------------------------------------<p>"; 
    ?>

<?php
if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3'])) {
    
    $notas = [
        'A1' => $_POST['n1'],
        'A2' => $_POST['n2'],
        'A3' => $_POST['n3']
    ];

   
    $media = (($notas['A1'] * 2) + ($notas['A2'] * 2) + ($notas['A3'] * 1)) / 5;

    
    echo "Média final: " . number_format($media, 2) . "<br>";

   
    if ($media >= 7) {
        echo "Situação: Aprovado";
    } else {
        echo "Situação: Reprovado";
    }
} else {
    echo "Por favor, insira todas as três notas.";
}
?>


<a href="exercicio8.html"><button type="button">Voltar</button></a>
</html>