<?php
        include 'until.php';
        $conn = conecta();

        $id = $_POST['id'];
    
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $turma = $_POST['turma'];

        $varSQL = "UPDATE alunos SET nome = :nome, email = :email, celular = :celular, turma = :turma WHERE id = :id";
        $update = $conn->prepare($varSQL);
        $update->bindParam(':nome', $nome);
        $update->bindParam(':email', $email);
        $update->bindParam(':celular', $celular);
        $update->bindParam(':turma', $turma);
        $update->bindParam(':id', $id);

        if ($update->execute()) {
            header('Location: alunos.php');
        } else {
            echo "Erro ao atualizar o aluno.";
        }

?>
