<?php
session_start();
require_once 'conexao.php';

if (isset($_POST['schedule'])) {
    $barber_name = mysqli_real_escape_string($conexao, trim($_POST['barber_name']));
    $customer_name = mysqli_real_escape_string($conexao, trim($_POST['customer_name']));
    $customer_second_name = mysqli_real_escape_string($conexao, trim($_POST['customer_second_name']));
    $customer_phone = mysqli_real_escape_string($conexao, trim($_POST['customer_phone']));
    $scheduled_date = mysqli_real_escape_string($conexao, trim($_POST['scheduled_date']));
    $scheduled_hour = (int) mysqli_real_escape_string($conexao, trim($_POST['scheduled_hour']));

    // VERIFICAÇÃO: mesmo barbeiro, mesma data, mesmo horário
    $verifica_sql = "SELECT * FROM agenda 
                     WHERE scheduled_date = '$scheduled_date' 
                     AND scheduled_hour = $scheduled_hour 
                     AND barber_name = '$barber_name'";
    
    $verifica_resultado = mysqli_query($conexao, $verifica_sql);

    if (mysqli_num_rows($verifica_resultado) > 0) {
        echo "<script>alert('Esse horário já foi preenchido para este barbeiro. Por favor, escolha outro.'); window.history.back();</script>";
        exit;
    }

    // INSERIR NO BANCO
    $sql = "INSERT INTO agenda (barber_name, customer_name, customer_second_name, customer_phone, scheduled_date, scheduled_hour) 
            VALUES ('$barber_name', '$customer_name', '$customer_second_name', '$customer_phone', '$scheduled_date', $scheduled_hour)";
    
    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        header('Location: index.php');
        exit;
    }
}
?>
