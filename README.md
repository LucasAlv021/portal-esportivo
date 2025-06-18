# 🏀 Projeto Final - Portal Esportivo

**Portal Esportivo** é um sistema web desenvolvido como projeto final do curso técnico em Informática. A aplicação tem como objetivo oferecer uma plataforma interativa para navegação entre esportes, exibição de produtos relacionados e formulário de contato com os administradores.

## 🚀 Funcionalidades

* Navegação por categorias de esportes
* Visualização de produtos esportivos
* Formulário de contato integrado
* Interface responsiva e moderna

## 🧰 Tecnologias Utilizadas

* **Laravel (PHP)**
* **Tailwind CSS**
* **Vite**
* **JavaScript**

## 📁 Estrutura do Projeto

* `app/` – Lógica principal da aplicação (Models, Controllers)
* `routes/` – Definições de rotas (web.php, api.php)
* `resources/` – Views Blade, estilos (Tailwind), scripts (JS)
* `database/` – Migrations, Seeders, Factories
* `config/` – Arquivos de configuração
* `public/` – Arquivos públicos (imagens, index.php)
* `storage/` – Arquivos gerados (logs, cache, uploads)
* `.env.example` – Exemplo das variáveis de ambiente

## 👥 Colaboradores

* Lucas Alves
* Ronyeri Alves
* Cauã Costa
* Daniel Silva
* Gustavo Oliveira

## ⚙️ Como Executar Localmente

### 1. Pré-requisitos

Certifique-se de ter instalado:

* [PHP 8.1+](https://www.php.net/)
* [Composer](https://getcomposer.org/)
* [Node.js e NPM](https://nodejs.org/)
* [MySQL](https://www.mysql.com/) ou outro banco compatível
* [XAMPP/Laragon](https://www.apachefriends.org/pt_br/index.html) (opcional)

### 2. Instalação do Projeto

```bash
# Clone o repositório
git clone https://github.com/LucasAlv021/portal-esportivo.git

# Acesse o diretório
cd portal-esportivo

# Instale as dependências do PHP
composer install

# Instale as dependências do Node
npm install

# Compile os assets
npm run dev

# Copie o arquivo de ambiente
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate
```

### 3. Configuração do Banco de Dados

1. Crie um banco de dados com o nome `portal_esportivo`
2. No arquivo `.env`, atualize as credenciais de acesso ao banco:

```env
DB_DATABASE=lifesport
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

3. Execute as migrações e seeders:

```bash
php artisan migrate --seed
```

### 4. Inicializar o Servidor

```bash
php artisan serve
```

A aplicação estará disponível em `http://localhost:8000`.

---

## 💬 Contato

Caso queira entrar em contato com os desenvolvedores, utilize o formulário de contato dentro do portal ou envie um e-mail.


