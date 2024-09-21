<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Identificação do mês correspondente a um número. </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 10 <p></p>- Identificação do mês correspondente a um número. </h2>
    <?php 
        echo "-------------------------------------------------------------<p>";
        echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
        echo "Receba os valores via POST e apresente o resultado<p>";
        echo "-------------------------------------------------------------<p>"; 
    ?>

<?php
if (isset($_POST['n1'])) {
    
    $n1 = $_POST['n1'];

    
    if ($n1 >= 1 && $n1 <= 12) {
        
        $meses = [
            1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril",
            5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto",
            9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro"
        ];

        
        echo "O mês correspondente ao número $n1 é " . $meses[$n1] . ".";
    } else {
        
        echo "Não existe mês correspondente ao número $n1.";
    }
} else {
    echo "Por favor, insira um número.";
}
?>



<a href="exercicio10.html"><button type="button">Voltar</button></a>
</html>