<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Calculadora com switch </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 4 <p></p>- Calculadora com switch </h2>
    <?php 
        echo "-------------------------------------------------------------<p>";
        echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
        echo "Receba os valores via POST e apresente o resultado<p>";
        echo "-------------------------------------------------------------<p>"; 
    ?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = isset($_POST['n1']) ? (float)$_POST['n1'] : 0;
        $n2 = isset($_POST['n2']) ? (float)$_POST['n2'] : 0;
        $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : '';

        $resultado = '';

        switch ($operacao) {
            case 'soma':
                $resultado = $n1 + $n2;
                break;
            case 'subtracao':
                $resultado = $n1 - $n2;
                break;
            case 'multiplicacao':
                $resultado = $n1 * $n2;
                break;
            case 'divisao':
                if ($n2 != 0) {
                    $resultado = $n1 / $n2;
                } else {
                    $resultado = 'Erro: Divisão por zero.';
                }
                break;
            default:
                $resultado = 'Operação inválida.';
                break;
        }

        echo "<h2>Resultado:</h2>";
        echo "<p>$n1 " . ($operacao == 'soma' ? '+' : ($operacao == 'subtracao' ? '-' : ($operacao == 'multiplicacao' ? '*' : '/'))) . " $n2 = $resultado</p>";
    }
    ?>
    <a href="exercicio4.html"><button type="button">Voltar</button></a>
</body>
</html>