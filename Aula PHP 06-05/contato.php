<?php 
    $string_conexao = "pgsql:host=localhost; port=5432; dbname=php; user=postgres; password=postgres";
    $conn = new PDO($string_conexao);

    if (!$conn) {
        echo "Não conectado";
        exit;
    }

    $varSQL = "SELECT nome, celular, email FROM alunos";
    $select = $conn->query($varSQL);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th><strong>Nome</strong></th>
                <th><strong>Celular</strong></th>
                <th><strong>Email</strong></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($linha = $select->fetch()) { ?>
                
                <tr>
                    <td><?php echo ($linha['nome']); ?></td>
                    <td><?php echo ($linha['celular']); ?></td>
                    <td><?php echo ($linha['email']); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
