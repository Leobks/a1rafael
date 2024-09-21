<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Exibição da tabuada de um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 2 <p></p>- Exibição da tabuada de um número</h2>
    <?php 
        echo "-------------------------------------------------------------<p>";
        echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
        echo "Receba os valores via POST e apresente o resultado<p>";
        echo "-------------------------------------------------------------<p>"; 
    ?>

    <?php
        $tabuada = $_POST['tabuada'];

        echo "Tabuada do $tabuada:<br>";

        for ($i = 1; $i <= 10; $i++) {
        $resultado = $tabuada * $i;
        echo "$tabuada x $i = $resultado<br>";
        }
    ?>
    <a href="exercicio2.html"><button type="button">Voltar</button></a>
</body>
</html>