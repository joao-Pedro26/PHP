<<?php 
    include 'until.php';

    $conn = conecta();

    $id = $_GET['id'];

    $varSQL = "DELETE FROM alunos WHERE id = :id";

    $delete = $conn->prepare($varSQL);
    $delete->bindParam(':id', $id);

    if ($delete->execute()) {
        header('Location: alunos.php');
    } else {
        echo "Erro ao excluir o aluno.";
    }
?>''