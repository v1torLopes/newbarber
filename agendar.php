<?php
echo $_GET['barber_id'];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agendar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="container my-5">
        <form action="acoes.php" method="POST" class="row g-3 needs-validation" novalidate>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Nome</label>
                <input type="text" class="form-control" id="validationTooltip01" value=" " name="customer_name" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip02" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="validationTooltip02" value=" " name="customer_second_name" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltipUsername" class="form-label">Telefone</label>
                <div class="input-group has-validation">
                  
                    <input type="text" class="form-control" id="validationTooltipUsername" name="customer_phone"
                        aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                    </div>
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip03" class="form-label">Data</label>
                <input type="date" class="form-control" id="validationTooltip03" name="scheduled_date" required>
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3 position-relative">
                <label for="validationTooltip04" class="form-label">Horário</label>
                <select class="form-select" id="validationTooltip04" name="scheduled_hour" required>
                    <option selected disabled value="">Escolha o Horário...</option>
                    <option value="9">09:00</option>
                    <option value="10">10:00</option>
                    <option value="11">11:00</option>
                    <option value="12">12:00</option>
                    <option value="13" >13:00</option>
                    <option value="14">14:00</option>
                    <option value="15">15:00</option>
                    <option value="16">16:00</option>
                </select>
                <div class="invalid-tooltip">
                    Please select a valid state.
                </div>
            </div>
            <input type="hidden" name="barber_name" value="<?=$_GET['barber_id']?>">
            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="schedule">Agendar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const dateInput = document.getElementById('validationTooltip03');

        // Define a data mínima como hoje
        const today = new Date();
        const yyyy = today.getFullYear();
        const mm = String(today.getMonth() + 1).padStart(2, '0');
        const dd = String(today.getDate()).padStart(2, '0');
        const minDate = `${yyyy}-${mm}-${dd}`;
        dateInput.setAttribute('min', minDate);

        // Bloqueia seleção de domingo
        dateInput.addEventListener('change', function () {
            const selectedDate = new Date(this.value);
            const dayOfWeek = selectedDate.getUTCDay(); // 0 = Domingo

            if (dayOfWeek === 0) {
                alert('Não é possível agendar aos domingos. Por favor, escolha outro dia.');
                this.value = '';
            }
        });
    });
</script>

</body>

</html>
