# 🏀 Portal Esportivo

O Portal Esportivo é um sistema web desenvolvido como projeto final de curso técnico. Ele tem como objetivo oferecer uma plataforma prática e intuitiva para navegação entre esportes, produtos relacionados e formulários de contato. O sistema está estruturado com base no framework Laravel e utiliza tecnologias modernas como Tailwind CSS e Vite para performance e usabilidade.


## 👨‍💻 Integrantes do Grupo

- Lucas Alves
- Ronyeri Alves  
- Cauã Costa
- Daniel Silva 
- Gustavo Oliveira


## 📁 Estrutura do Projeto

portal-esportivo/
├── app/ # Lógica principal do sistema (Models, Controllers)
├── bootstrap/ # Inicialização do Laravel
├── config/ # Arquivos de configuração
├── database/ # Seeders, Migrations, Factories
├── public/ # Arquivos públicos (imagens, index.php)
├── resources/ # Views (Blade), CSS (Tailwind), JS
├── routes/ # Definições de rotas (web.php, api.php)
├── storage/ # Arquivos gerados (logs, cache, uploads)
├── tests/ # Testes automatizados (PHPUnit)
├── .env.example # Exemplo de variáveis de ambiente
├── README.md # Este arquivo



---

## ⚙️ Como executar o projeto

### 1. Pré-requisitos

Certifique-se de ter instalado:

- [PHP 8.1+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js e NPM](https://nodejs.org/)
- [MySQL](https://www.mysql.com/) ou outro banco de dados compatível
- [XAMPP/Laragon](https://www.apachefriends.org/pt_br/index.html) (opcional, para ambiente local)

---

### 2. Instalação

```bash
# Clone o repositório
git clone https://github.com/LucasAlv021/portal-esportivo.git
cd portal-esportivo

# Instale as dependências do PHP
composer install

# Instale as dependências do Node (JS/CSS)
npm install && npm run dev

# Copie e configure as variáveis de ambiente
cp .env.example .env
php artisan key:generate



##3. Banco de Dados
Crie um banco de dados chamado portal_esportivo.

Configure o arquivo .env com suas credenciais de banco:

DB_DATABASE=lifesport
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha



Execute as migrações e seeders:
php artisan migrate --seed



Executar o servidor
php artisan serve
💬 Contato
Caso queira entrar em contato com os desenvolvedores, use o formulário de contato dentro do portal ou envie um e-mail.







