<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Cálculo do fatorial de um número: RECURSIVO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Resolução do Exercício 3 <p></p>- Cálculo do fatorial de um número: RECURSIVO</h2>
    <?php 
        echo "-------------------------------------------------------------<p>";
        echo "Seu Algorítmo para resolução do exercicio PHP deve estar aqui<p>";
        echo "Receba os valores via POST e apresente o resultado<p>";
        echo "-------------------------------------------------------------<p>"; 
    ?>

    <?php
        
        
    $fatorial = $_POST['fatorial'];
    
        
    function fatorialRecursivo($fatorial) {
    
    if ($fatorial <= 1) {
    return 1;
    } else {
               
    return $fatorial * fatorialRecursivo($fatorial - 1);
    }
    }
        
    
    $resultado = fatorialRecursivo($fatorial);
    echo "O fatorial de $fatorial é $resultado.";
        
        
    ?>
    <a href="exercicio3.html"><button type="button">Voltar</button></a>
</body>
</html>