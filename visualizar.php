<?php
require 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM agenda WHERE id = ?";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $agendamento = mysqli_fetch_assoc($result);
} else {
    echo "<p>ID do agendamento não fornecido.</p>";
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visualizar Agendamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <h4>Detalhes do Agendamento</h4>
            </div>
            <div class="card-body">
                <?php if ($agendamento): ?>
                    <p><strong>Nome:</strong> <?= $agendamento['customer_name'] ?></p>
                    <p><strong>Sobrenome:</strong> <?= $agendamento['customer_second_name'] ?></p>
                    <p><strong>Telefone:</strong> <?= $agendamento['customer_phone'] ?></p>
                    <p><strong>Data:</strong> <?= $agendamento['scheduled_date'] ?></p>
                    <p><strong>Horário:</strong> <?= $agendamento['scheduled_hour'] ?></p>
                <?php else: ?>
                    <p>Agendamento não encontrado.</p>
                <?php endif; ?>
                <a href="agendamentos.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
