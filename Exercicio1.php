<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Verificação de Número Positivo, Negativo ou Zero</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 1 <p>- Verificação de Número Positivo, Negativo ou Zero</h2>
    <?php 
        echo "-------------------------------------------------------------<p>";
        echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
        echo "Receba os valores via POST e apresente o resultado<p>";
        echo "-------------------------------------------------------------<p>"; 
    ?>

    <?php
        $calculo = $_POST['calculo'];

        if ($calculo > 0) {
            echo "O número é positivo.";
        } elseif ($calculo < 0) {
            echo "O número é negativo.";
        } else {
            echo "O número é zero.";
        }
    ?>
    <a href="exercicio1.html"><button type="button">Voltar</button></a>
</body>
</html>
