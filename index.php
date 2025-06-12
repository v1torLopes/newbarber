<?php
require 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barbearia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background: url('imagens/barber3.png') no-repeat center center fixed;
            background-size: cover;
            color: white;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <?php include ('nav.php'); ?>

    
    <section class="container my-5" style="background: rgba(0, 0, 0, 0.7)" >
        <div id="carouselCortes" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="heigth: 545px;">
                <div class="carousel-item active">
                    <img src="imagens/barber2.jpg" class="d-block w-100" alt="Corte 1">
                </div>
                <div class="carousel-item" style="heigth: 545px;">
                    <img src="imagens/barber3.png"  class="d-block w-100" alt="Corte 2">
                </div>
                <div class="carousel-item" style="heigth: 545px;">
                    <img src="imagens/barber4.png" class="d-block w-100" alt="Corte 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselCortes" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselCortes" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </section>

    <section id="agendar" class="container my-5" >
        <h2 class="text-center" >Agende seu Horário</h2>
        <p class="text-center">Escolha um dos nossos barbeiros e garanta seu atendimento.</p>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="imagens/fallen.jpg" alt="Gabriel Fallen" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Gabriel Fallen</h5>
                        <p class="card-text">Especialista em cortes modernos e clássicos.</p>
                        <a href="agendar.php?barber_id=fallen" class="btn btn-primary">Agendar</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="imagens/fer.jpg" alt="Fernando Alvarenga" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Fernando Alvarenga</h5>
                        <p class="card-text">Barbeiro experiente, referência em fade e barba.</p>
                        <a href="agendar.php?barber_id=fer" class="btn btn-primary">Agendar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="planos" class="container my-5">
    <h2 class="text-center">Nossos Planos</h2>
    <p class="text-center">Você com seu visual sempre impecável para seus compromissos. <br>
       Corte o cabelo e faça a barba quantas vezes quiser além de muitos outros benefícios.</p>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        
        <div class="col">
            <div class="card text-center bg-dark text-white p-3">
                <h3>Plano Corte</h3>
                <h4>R$ 89,90</h4>
                <ul class="list-unstyled">
                    <li>✅ Corte Ilimitado</li>
                    <li>❌ Barba Ilimitado</li>
                    <li>✅ 10% de Desconto em Produtos e Serviços Extras</li>
                    <li>✅ Descontos em Empresas Parceiras</li>
                </ul>
                <p class="small">*Pagamento Recorrente Via Cartão de Crédito</p>
            </div>
        </div>
        
        <div class="col">
            <div class="card text-center bg-dark text-white p-3">
                <h3>Plano Combo</h3>
                <h4>R$ 149,90</h4>
                <ul class="list-unstyled">
                    <li>✅ Corte Ilimitado</li>
                    <li>✅ Barba Ilimitado</li>
                    <li>✅ 10% de Desconto em Produtos e Serviços Extras</li>
                    <li>✅ Descontos em Empresas Parceiras</li>
                </ul>
                <p class="small">*Pagamento Recorrente Via Cartão de Crédito</p>
            </div>
        </div>
        
        <div class="col">
            <div class="card text-center bg-dark text-white p-3">
                <h3>Plano Barba</h3>
                <h4>R$ 109,90</h4>
                <ul class="list-unstyled">
                    <li>❌ Corte Ilimitado</li>
                    <li>✅ Barba Ilimitado</li>
                    <li>✅ 10% de Desconto em Produtos e Serviços Extras</li>
                    <li>✅ Descontos em Empresas Parceiras</li>
                    
                </ul>
                <p class="small">*Pagamento Recorrente Via Cartão de Crédito</p>
            </div>
        </div>
    </div>
</section>


    <section id="servicos" class="container my-5">
        <h2 class="text-center text-white">Nossos Serviços</h2>
        <div class="table-responsive">
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <th>Serviço</th>
                        <th>Avulso</th>
                        <th>Assinante</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Corte Máquina</td>
                        <td>R$ 40,00</td>
                        <td>R$ 00,00</td>
                    </tr>
                    <tr>
                        <td>Corte Disfarçado (Degradê)</td>
                        <td>R$ 50,00</td>
                        <td>R$ 00,00</td>
                    </tr>
                    <tr>
                        <td>Corte Tesoura</td>
                        <td>R$ 55,00</td>
                        <td>R$ 00,00</td>
                    </tr>
                    <tr>
                        <td>Barba Express</td>
                        <td>R$ 35,00</td>
                        <td>R$ 00,00</td>
                    </tr>
                    <tr>
                        <td>Combo Cabelo + Barba</td>
                        <td>R$ 75,00</td>
                        <td>R$ 00,00</td>
                    </tr>
                    <tr>
                        <td>Kids - Corte Infantil</td>
                        <td>R$ 55,00</td>
                        <td>R$ 00,00</td>
                    </tr>
                    <tr>
                        <td>Pezinho Contorno</td>
                        <td>R$ 20,00</td>
                        <td>R$ 00,00</td>
                    </tr>
                    <tr>
                        <td>Máscara Negra / Limpeza de Pele</td>
                        <td>R$ 15,00</td>
                        <td>R$ 13,50</td>
                    </tr>
                    <tr>
                        <td>Sobrancelha</td>
                        <td>R$ 15,00</td>
                        <td>R$ 13,50</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-4">
            <a href="#agendar" class="btn btn-success">Agende seu horário</a>
        </div>
    </section>

    
   
<section id="contato" class="container my-5 text-center">
    <h2 class="mb-4">📞 Entre em Contato</h2>
    <p class="lead">Tem alguma dúvida ou quer agendar um horário? Fale conosco!</p>


    <div class="mt-4">
    
        <h4>☎️ Telefone</h4>
        <p>(21) 98765-4321</p>
    </div>

    <div class="mt-4">
        <a href="https://wa.me/21984022512" class="btn btn-success m-2">WhatsApp</a>
        <a href="https://www.instagram.com/gbstudioo_/" class="btn btn-danger m-2">Instagram</a>
        <a href="mailto:seuemail@email.com" class="btn btn-dark m-2">E-mail</a>
    </div>
</section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        
        $(document).ready(function(){
            $('a[href^="#"]').on('click', function(event) {
                event.preventDefault();
                var target = this.hash;
                $('html, body').animate({ scrollTop: $(target).offset().top }, 800);
            });
        });
    </script>

    
    <section id="localizacao" class="container my-5 text-center">
        <h2>Localização</h2>
        <p>Venha nos visitar! Estamos localizados no melhor ponto da cidade.</p>
        <div class="ratio ratio-16x9">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.3477251784976!2d-43.036432885035566!3d-22.80542828505374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99658b2a2a269d%3A0x527265f9e3ab9d36!2sR.%20Dr.%20March%2C%2095%20-%20Barreto%2C%20S%C3%A3o%20Gon%C3%A7alo%20-%20RJ%2C%2024410-000!5e0!3m2!1spt-BR!2sbr!4v1685043300000" 
            width="600" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        </div>
    </section>

</body>
</html>
