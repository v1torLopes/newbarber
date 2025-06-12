<?php
require 'conexao.php';

// Verifica se o ID foi passado na URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID do agendamento não fornecido.");
}

$id = $_GET['id'];

// Busca os dados do agendamento
$sql = "SELECT * FROM agenda WHERE id = ?";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 1) {
    $agendamento = mysqli_fetch_assoc($result);
} else {
    die("Agendamento não encontrado.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $customer_second_name = $_POST['customer_second_name'];
    $customer_phone = $_POST['customer_phone'];
    $scheduled_date = $_POST['scheduled_date'];
    $scheduled_hour = $_POST['scheduled_hour'];

    // Atualiza os dados no banco de dados
    $sql = "UPDATE agenda SET customer_name = ?, customer_second_name = ?, customer_phone = ?, scheduled_date = ?, scheduled_hour = ? WHERE id = ?";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, "sssssi", $customer_name, $customer_second_name, $customer_phone, $scheduled_date, $scheduled_hour, $id);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: agendamentos.php?mensagem=Agendamento atualizado com sucesso");
        exit();
    } else {
        echo "Erro ao atualizar: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Agendamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container my-5">
        <h2>Editar Agendamento</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="customer_name" value="<?= $agendamento['customer_name'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Sobrenome</label>
                <input type="text" class="form-control" name="customer_second_name" value="<?= $agendamento['customer_second_name'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" class="form-control" name="customer_phone" value="<?= $agendamento['customer_phone'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Data</label>
                <input type="date" class="form-control" name="scheduled_date" value="<?= $agendamento['scheduled_date'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Horário</label>
                <select class="form-select" name="scheduled_hour" required>
                    <option value="9" <?= ($agendamento['scheduled_hour'] == '9' ? 'selected' : '') ?>>09:00</option>
                    <option value="10" <?= ($agendamento['scheduled_hour'] == '10' ? 'selected' : '') ?>>10:00</option>
                    <option value="11" <?= ($agendamento['scheduled_hour'] == '11' ? 'selected' : '') ?>>11:00</option>
                    <option value="12" <?= ($agendamento['scheduled_hour'] == '12' ? 'selected' : '') ?>>12:00</option>
                    <option value="13" <?= ($agendamento['scheduled_hour'] == '13' ? 'selected' : '') ?>>13:00</option>
                    <option value="14" <?= ($agendamento['scheduled_hour'] == '14' ? 'selected' : '') ?>>14:00</option>
                    <option value="15" <?= ($agendamento['scheduled_hour'] == '15' ? 'selected' : '') ?>>15:00</option>
                    <option value="16" <?= ($agendamento['scheduled_hour'] == '16' ? 'selected' : '') ?>>16:00</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="agendamentos.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
