<?php
require 'conexao.php'; 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agendamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <!-- TIRAR A NAV É SO RETIRAR A LINHA ABAIXO -->
    <?php include('nav.php'); ?>

    <div class="container my-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Agendamentos</h4>

            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Telefone</th>
                            <th>Data</th>
                            <th>Horário</th>
                            <th>Barbeiro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $sql = "SELECT * FROM agenda";
                        $agenda = mysqli_query($conexao, $sql);

                        
                        if (!$agenda) {
                            die("Erro na consulta: " . mysqli_error($conexao));
                        }

                        
                        if (mysqli_num_rows($agenda) > 0) {
                            while ($agendamentos = mysqli_fetch_assoc($agenda)) {
                        ?>
                        <tr>
                            <td><?= $agendamentos['id'] ?></td>
                            <td><?= $agendamentos['customer_name'] ?></td>
                            <td><?= $agendamentos['customer_second_name'] ?></td>
                            <td><?= $agendamentos['customer_phone'] ?></td>
                            <td><?= $agendamentos['scheduled_date'] ?></td>
                            <td><?= $agendamentos['scheduled_hour'] ?>:00</td>
                            <td><?= $agendamentos['barber_name'] ?></td>
                            <td>
                                <a href="visualizar.php?id=<?= $agendamentos['id'] ?>" class="btn btn-secondary btn-sm">Visualizar</a>
                                <a href="editar.php?id=<?= $agendamentos['id'] ?>" class="btn btn-success btn-sm">Editar</a>
                                <form action="excluir.php" method="POST" class="d-inline">
                                    <input type="hidden" name="id" value="<?= $agendamentos['id'] ?>">
                                    <button type="submit" name="delete_usuario" class="btn btn-danger btn-sm">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='7' class='text-center'>Nenhum agendamento encontrado.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
