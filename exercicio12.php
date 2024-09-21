<link rel="stylesheet" href="style.css">

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

    
    $sql = "SELECT nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, hc, ch
            FROM alunos
            WHERE $campo LIKE ?";
    $stmt = mysqli_prepare($conexao, $sql);
    $valor_completo = "%$valor%";
    mysqli_stmt_bind_param($stmt, 's', $valor_completo);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Nome</th>
                    <th>Matrícula</th>
                    <th>Curso</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>CEP</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>Curso para Horas Complementares</th>
                    <th>Carga Horária</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
                    <td>{$row['nome']}</td>
                    <td>{$row['matricula']}</td>
                    <td>{$row['curso']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['telefone']}</td>
                    <td>{$row['endereco']}</td>
                    <td>{$row['cep']}</td>
                    <td>{$row['cidade']}</td>
                    <td>{$row['uf']}</td>
                    <td>{$row['hc']}</td>
                    <td>{$row['ch']}</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Por favor, forneça um critério e um valor para busca.";
}

mysqli_close($conexao);
?>
<a href="exclusao.html"><button type="button">Exclusão de cadastro</button></a>
<a href="exercicio12.html"><button type="button">Voltar</button></a>
