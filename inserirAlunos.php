<?php 
    include 'until.php';

    $conn = conecta();
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $turma = $_POST['turma'];

    $varSQL = "INSERT INTO alunos (nome, celular, email, sexo, turma ) VALUES (:nome,:celular, :email,:sexo, :turma)";
    $select = $conn->prepare($varSQL);
    $select->bindParam(':nome', $nome);
    $select->bindParam(':celular', $celular);
    $select->bindParam(':email', $email);
    $select->bindParam(':sexo', $sexo);
    $select->bindParam(':turma', $turma);
    $select->execute();
    header('Location: alunos.php');
?>

