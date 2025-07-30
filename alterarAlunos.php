<?php 
    include 'until.php';
    $conn = conecta();

    $id = $_GET['id'];

    $varSQL = "SELECT * FROM alunos WHERE id = :id";
    $select = $conn->prepare($varSQL);
    $select->bindParam(':id', $id);
    $select->execute();
    $aluno = $select->fetch();

    if (!$aluno) {
        echo "Aluno não encontrado.";
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Alterar Aluno</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }
        h2 {
            margin-top: 40px;
        }
        main {
            display: flex;
            justify-content: center;
            margin: 40px auto;
            padding: 24px 32px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            background-color: #fff;
            min-width: 320px;
        }
        form {
            width: 100%;
        }
        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 7px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            margin-top: 18px;
            padding: 10px 24px;
            background-color: #1976d2;
            border-radius: 5px;
            border: none;
            color: white;
            font-weight: bold;
            cursor: pointer;
            box-shadow: -1px 2px 0px 3px rgb(117, 165, 255), 0 1px 2px rgba(0, 0, 0, 0.1);
            transition: background 0.2s;
            position: relative;
            left: 37%;
        }
        button:hover {
            background-color: #1565c0;
        }
    </style>
</head>
<body>
    <h2>Alterar Aluno</h2>
    <main>
    <form  action="updateAlunos.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $aluno['id'] ?>">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo htmlspecialchars($aluno['nome']); ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($aluno['email']); ?>" required>
        <label>Celular:</label>
        <input type="text" name="celular" value="<?php echo htmlspecialchars($aluno['celular']); ?>" required>
        <label>Turma:</label>
        <select name="turma" required>
            <option value="2INIA" <?php if($aluno['turma']=='2INIA') echo 'selected'; ?>>2INIA</option>
            <option value="2INIB" <?php if($aluno['turma']=='2INIB') echo 'selected'; ?>>2INIB</option>
            <option value="2INF" <?php if($aluno['turma']=='2INF') echo 'selected'; ?>>2INF</option>
        </select>
        <button type="submit">Salvar</button>
    </form>
    </main>
</body>
</html>