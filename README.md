---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

finance-management-system/
│
├── config/
│   └── db.php                  # Database connection
│
├── public/
│   ├── index.php               # Main page for transactions
│   ├── add_transaction.php     # Form to add new transactions
│   ├── calculator.php          # Interest and finance calculator
│   ├── categories.php          # Manage categories for transactions
│   ├── dashboard.php           # Financial dashboard
│   ├── export.php              # Export CSV and PDF functionality
│   ├── login.php               # User login page
│   ├── register.php            # User registration page
│   ├── reports.php             # Generate and view reports
│   └── css/
│       └── style.css           # Stylesheet for the project
│   └── js/
│       └── charts.js           # JavaScript for handling charts (e.g., on dashboard)
│
├── sql/
│   └── create_database.sql     # SQL script for creating database tables
│
├── assets/                     # Assets like images or libraries
│   └── chart.js                # Chart.js library for generating charts
│
└── README.md                   # Project documentation

Descrição:
config/ : Diretório de configuração de conexão com o banco de dados.
public/ : Contém os principais arquivos PHP do sistema, incluindo as páginas de transação, design, categorias, login, exportação de dados, e o CSS.
add_transaction.php : Página para adicionar novas transações.
calculadora.php : Página com a calculadora de juros e finanças.
dashboard.php : Página do painel com resumo financeiro.
export.php : Função para exportação de relatórios em CSV ou PDF.
login.php : Página de login dos usuários.
Register.php : Página de registro de usuários.
reports.php : Página para gerar relatórios.
css/ : Contém o arquivo de estilo.
js/ : Para scripts JavaScript relacionados ao painel e gráficos.
sql/ : Contém o script SQL para criação do banco de dados e suas tabelas.
assets/ : Para recursos como bibliotecas de gráficos ou imagens.
README.md : Documentação do projeto explicando sua estrutura e instruções para configuração e uso.
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

testes: 

CREATE DATABASE IF NOT EXISTS FinanceManagement;
USE FinanceManagement;

-- Tabela de Usuários
CREATE TABLE `users` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
    `password` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
    PRIMARY KEY (`id`) USING BTREE,
    UNIQUE INDEX `username` (`username`) USING BTREE
) COLLATE='utf8mb4_0900_ai_ci' ENGINE=InnoDB;

-- Tabela de Categorias
CREATE TABLE `categories` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
    PRIMARY KEY (`id`) USING BTREE
) COLLATE='utf8mb4_0900_ai_ci' ENGINE=InnoDB;

-- Tabela de Transações
CREATE TABLE `transactions` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `description` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
    `amount` DECIMAL(10,2) NULL DEFAULT NULL,
    `type` ENUM('entrada', 'saida') NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
    `date` DATE NULL DEFAULT NULL,
    `category_id` INT(10) NULL DEFAULT NULL,
    `attachment` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
    PRIMARY KEY (`id`) USING BTREE,
    FOREIGN KEY (`category_id`) REFERENCES categories(`id`) ON DELETE SET NULL
) COLLATE='utf8mb4_0900_ai_ci' ENGINE=InnoDB;

-- Tabela de Clientes (opcional)
CREATE TABLE `clients` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
    `email` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci',
    `phone` VARCHAR(20) NULL DEFAULT NULL,
    PRIMARY KEY (`id`) USING BTREE
) COLLATE='utf8mb4_0900_ai_ci' ENGINE=InnoDB;
financemanagement

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
