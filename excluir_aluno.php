<?php
include("conexao.php");

$criterio = $_POST['criterio'] ?? '';
$valor = $_POST['valor'] ?? '';

if ($criterio && $valor) {
    
    $campo = '';
    if ($criterio == 'nome') {
        $campo = 'nome';
    } elseif ($criterio == 'matricula') {
        $campo = 'matricula';
    } elseif ($criterio == 'email') {
        $campo = 'email';
    }

    
    $sql = "DELETE FROM alunos WHERE $campo = ?";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, 's', $valor);

    if (mysqli_stmt_execute($stmt) && mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Registro excluído com sucesso.";
    } else {
        echo "Erro: Registro não encontrado ou falha ao excluir.";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Por favor, forneça um critério e um valor para exclusão.";
}

mysqli_close($conexao);
?>
<a href="index.html"><button type="button">Voltar</button></a>
