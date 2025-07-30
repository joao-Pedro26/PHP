<?php 
    include 'until.php';
    
    $conn = conecta();
    $varSQL = "SELECT * FROM alunos";

    $select = $conn -> prepare($varSQL);
    $select -> execute();



?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro</title>
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
            justify-content: center;
            flex-direction: column;
        }
     
        table {
            border-collapse: collapse;
            margin: 40px auto;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            width: 700px;
        }
        td {
            padding: 12px 18px;
            text-align: left;
        }
        th {
            background-color: #1976d2;
            color: #fff;
            font-weight: bold;
            border-bottom: 2px solid #1565c0;
            padding: 12px 18px;
        }
        tr {
            background-color: #f5f5f5;
        }
        tr:hover {
            background-color: #e3f2fd;
        }
        td {
            border-bottom: 1px solid #e0e0e0;
        }
        a {
            text-decoration: none;
            color: #1976d2;
            font-weight: bold;
            text-align: center;
        }

    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Celular</th>
            <th>Turma</th>
            <th></th>
            <th></th>
        </tr>
        <?php 
            while ($linha = $select -> fetch()){
            echo "<tr>";
            echo "<td>" . $linha['id'] . "</td>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['email'] . "</td>";
            echo "<td>" . $linha['celular'] . "</td>";
            echo "<td>" . $linha['turma'] . "</td>";    
            echo "<td><a href='alterarAlunos.php?id=" . $linha['id'] . "'>Alterar</a></td>";
            echo "<td><a href='excluirAlunos.php?id=" . $linha['id'] . "'>Excluir</a></td>";
            echo "</tr>";
            }
        ?>
    </table>
    <a href='adicionarCursos.php'>Adicionar</a>
            
 
</body>
</html>