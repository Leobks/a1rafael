<link rel="stylesheet" href="style.css">

<?php
include("conexao.php");


$matricula = $_POST['matricula'] ?? null;
$nova_carga = (int) ($_POST['nova_carga'] ?? 0);

if ($matricula && $nova_carga > 0) {
    
    $sql = "UPDATE alunos SET ch = ch + ? WHERE matricula = ?";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, 'is', $nova_carga, $matricula);

    if (mysqli_stmt_execute($stmt) && mysqli_stmt_affected_rows($stmt) > 0) {
        
        $sql_select = "SELECT ch FROM alunos WHERE matricula = ?";
        $stmt_select = mysqli_prepare($conexao, $sql_select);
        mysqli_stmt_bind_param($stmt_select, 's', $matricula);
        mysqli_stmt_execute($stmt_select);
        mysqli_stmt_bind_result($stmt_select, $carga_atualizada);
        mysqli_stmt_fetch($stmt_select);

        echo "Saldo de horas complementares atualizada com sucesso! Saldo de horas complementares totais: " . $carga_atualizada . " horas.";

        mysqli_stmt_close($stmt_select);
    } else {
        echo "Erro: Matrícula não encontrada ou falha ao atualizar.";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Por favor, forneça uma matrícula válida e um valor de carga horária maior que 0.";
}

mysqli_close($conexao);
?>
<a href="index.html"><button type="button">Voltar</button></a>