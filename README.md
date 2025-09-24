# Sistema de Agendamento de Consultas

Este é um sistema de agendamento de consultas médicas desenvolvido como um teste prático de programação PHP com Laravel.

## Funcionalidades

* Autenticação de Médicos (Login e Registo).
* Gestão completa (CRUD) de Pacientes.
* Gestão completa (CRUD) de Agendamentos para o médico logado.
* API REST para consultar os recursos da aplicação (testável via Postman).

## Tecnologias Utilizadas

* **Backend:** PHP, Laravel
* **Frontend:** Blade
* **Base de Dados:** MySQL
* **Ambiente de Desenvolvimento:** Docker com Laravel Sail

---

## Requisitos para Instalação

* Composer
* Node.js e NPM
* Docker Desktop
* WSL 2 (para utilizadores Windows)

---

## Instalação e Execução (com Docker)

Este projeto foi configurado para correr com **Laravel Sail**, a interface oficial do Laravel para o Docker. Siga os passos abaixo:

**1. Clonar o Repositório**

```bash
git clone [https://github.com/RuanPasseto/agendamento-medico.git]
cd agendamento-medico
```

**2. Instalar as Dependências do PHP**

```bash
composer install
```

**3. Configurar o Ficheiro de Ambiente**
Copie o ficheiro de exemplo. O ficheiro `.env` já vem pré-configurado para o Sail.

```bash
cp .env.example .env
php artisan key:generate
```

**4. Iniciar os Contentores do Sail**
Este comando irá baixar as imagens necessárias e iniciar o servidor web e a base de dados. A primeira execução pode demorar alguns minutos. **Execute este comando a partir do WSL (no Windows) ou do seu terminal padrão (no macOS/Linux).**

```bash
./vendor/bin/sail up -d
```

**5. Instalar as Dependências do Frontend**
Use o Sail para correr o NPM dentro do contentor.

```bash
./vendor/bin/sail npm install
```

**6. Correr as Migrations**
Este comando criará a estrutura da base de dados dentro do contentor MySQL.

```bash
./vendor/bin/sail artisan migrate
```

**7. Pronto!**
A sua aplicação estará acessível em `http://localhost`.

O servidor de frontend para compilação em tempo real pode ser iniciado com:

```bash
./vendor/bin/sail npm run dev
```

---

## Controlo de Versão (Git)

O teste pede para usar o Git. Se ainda não o fez, agora é a hora de fazer o *commit* do seu trabalho.

```bash
# Inicia um repositório Git (se ainda não o fez)
git init

# Adiciona todos os ficheiros ao stage
git add .

# Faz o seu primeiro commit
git commit -m "Versão inicial do sistema de agendamento completa"
```

---

## Comandos Úteis do Sail

* **Iniciar o ambiente:** `./vendor/bin/sail up -d`
* **Parar o ambiente:** `./vendor/bin/sail down`
* **Executar qualquer comando Artisan:** `./vendor/bin/sail artisan <comando>`
* **Aceder ao terminal do contentor:** `./vendor/bin/sail shell`
