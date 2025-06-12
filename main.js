document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll("nav a[href^='#']");

    links.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            target.scrollIntoView({ behavior: "smooth" });
        });
    });
});

// Scroll suave ao clicar nos links do menu
document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Validação de formulário
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    if (form) {
        form.addEventListener("submit", function (e) {
            const phoneInput = form.querySelector('input[name="customer_phone"]');
            if (!/^\d{10,11}$/.test(phoneInput.value)) {
                alert("Telefone inválido. Digite apenas números com DDD.");
                e.preventDefault();
            }
        });
    }
});

// Animação de entrada ao rolar a página
const elements = document.querySelectorAll(".fade-in");
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("visible");
        }
    });
}, {
    threshold: 0.1
});

elements.forEach(el => observer.observe(el));

document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

const elementos = document.querySelectorAll('.fade-in');

function mostrarAoScroll() {
    elementos.forEach(el => {
        const top = el.getBoundingClientRect().top;
        const visible = window.innerHeight - 100;
        if (top < visible) {
            el.classList.add('mostrar');
        }
    });
}

window.addEventListener('scroll', mostrarAoScroll);

form.addEventListener('submit', function (e) {
    const nome = form.customer_name.value.trim();
    const telefone = form.customer_phone.value.trim();

    if (nome === '' || telefone === '') {
        e.preventDefault();
        alert('Por favor, preencha todos os campos obrigatórios!');
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const erro = urlParams.get('erro');
    const sucesso = urlParams.get('sucesso');
    const mensagemErro = document.getElementById('mensagemErro');
  
    if (erro) {
      mensagemErro.textContent = "Esse horário já foi preenchido! Por favor, escolha outro.";
      mensagemErro.style.display = "block";
    }
  
    if (sucesso) {
      mensagemErro.textContent = "Agendamento realizado com sucesso!";
      mensagemErro.style.backgroundColor = "#4CAF50"; // verde
      mensagemErro.style.display = "block";
    }
  });
  
