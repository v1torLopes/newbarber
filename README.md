# 💈 Barber - Sistema de Agendamentos para Barbearia

Este é um projeto web simples desenvolvido em PHP para controle de agendamentos de uma barbearia. O sistema permite que clientes agendem serviços informando seus dados e escolhendo data e hora.

## 🚀 Tecnologias Utilizadas

- PHP 8.1
- HTML5 / CSS3 / JavaScript
- MySQL (MariaDB)
- phpMyAdmin (para gerenciamento do banco)

## 📁 Estrutura de Pastas

barber/
├── api/ # Arquivos responsáveis por requisições e respostas
├── assets/ # Imagens, CSS e JS
├── components/ # Partes reutilizáveis da interface
├── conexao.php # Conexão com o banco de dados
├── agendar.php # Formulário para novo agendamento
├── agendamentos.php # Lista de agendamentos
├── index.php # Página inicial
└── README.md


## ✅ Pré-requisitos

Antes de começar, você vai precisar ter instalado:

- [XAMPP](https://www.apachefriends.org/index.html) ou outro ambiente com Apache + PHP + MySQL
- phpMyAdmin (geralmente incluso no XAMPP)
- Git (opcional)

## ⚙️ Como executar o projeto

1. **Clone o repositório:**

```bash
Mova a pasta do projeto para o diretório do seu servidor local:

No XAMPP, por exemplo: C:\xampp\htdocs\barber

Dentro da pasta clone o projeto com o comando git clone git@github.com:v1torLopes/newbarber.git

2.Inicie os serviços Apache e MySQL pelo XAMPP.

3.Importe o banco de dados:

Acesse http://localhost/phpmyadmin

Crie um banco de dados com o nome: barber

Vá em "Importar" e envie o script SQL abaixo:

🗄️ Script do Banco de Dados

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `barber`;
USE `barber`;

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `barber_name` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_second_name` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `scheduled_date` date NOT NULL,
  `scheduled_hour` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;


Abra o projeto no navegador:


http://localhost/barber

