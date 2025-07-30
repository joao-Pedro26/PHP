
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
            justify-content: center;
            
        }
        main {
            display: flex;
            justify-content: center;
            margin: 50px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 6px 6px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            width: 250px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select {
            width: 200px;
            padding: 5px;
            margin-top: 5px;
        }
        button {
            position: relative;
            top: 10px;
            left: 37%;
            padding: 8px 10px;
            margin: 10px 0 10px 0;
            background-color:  #1976d2;
            border-radius: 5px;
            border: none;
            box-shadow: -1px 2px 0px 3px rgb(117, 165, 255), 0 1px 2px rgba(0, 0, 0, 0.1);
            color: white;
        }
        
        </style>
</head>
<body>
    <main>
    <form action="inserirAlunos.php" method="POST">
        <label for="nomeAluno">Nome: </label>
        <input type="text"  name="nome" required>
        <br>
        <label for="celularAluno">Celular: </label>
        <input type="text" name="celular" required>
        <br>
        <label for="emailAluno">Email: </label>
        <input type="email" name="email" required>
        <br>
        <label for="sexoAluno">Sexo: </label>
        <select name= "sexo">
            <option value="M" >Masculino</option>
            <option value="F" >Feminino</option>
        </select>
        <br>
        <label for="turma">Turma: </label>
        <select name="turma"> 
            <option value="2INIA" >2INIA</option>
            <option value="2INIB" >2INIB</option>
            <option value="2INF" >2INF</option>
        </select>
        <br>
        <button type="submit"><b>Enviar</button>
    </form>
    </main>
</body>
</html>