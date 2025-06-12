<?php
require 'conexao.php'; 

if (isset($_POST['delete_usuario'])) {
    $id = $_POST['id'];

    // Verifica se o ID foi fornecido e é um número válido
    if (!empty($id) && is_numeric($id)) {
        $sql = "DELETE FROM agenda WHERE id = ?";
        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);

            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo "<script>alert('Agendamento excluído com sucesso!'); window.location.href='agendamentos.php';</script>";
            } else {
                echo "<script>alert('Erro ao excluir agendamento ou ID não encontrado.'); window.location.href='agendamentos.php';</script>";
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "<script>alert('Erro na preparação da exclusão.'); window.location.href='agendamentos.php';</script>";
        }
    } else {
        echo "<script>alert('ID inválido.'); window.location.href='agendamentos.php';</script>";
    }

    mysqli_close($conexao);
} else {
    echo "<script>alert('Requisição inválida.'); window.location.href='agendamentos.php';</script>";
}
