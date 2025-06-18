# 📅 Agendador de Tarefas

Um simples, mas poderoso, agendador de tarefas construído com o framework **CakePHP 5.x**.  
Esta aplicação permite que os usuários se cadastrem, façam login e gerenciem suas próprias listas de tarefas.

---

## ✨ Funcionalidades

- 🔐 Autenticação de Usuário: Sistema de login e registro de usuários seguro.
- ✅ CRUD de Tarefas: Crie, visualize, edite e exclua suas tarefas.
- 🔒 Privacidade: Cada usuário só pode ver e gerenciar as suas próprias tarefas.
- 🧼 Interface Simples: Layout direto e funcional para facilitar o uso.

---

## 🛠 Pré-requisitos

Antes de começar, você precisa ter os seguintes softwares instalados:

- PHP 8.1+
- Composer
- PostgreSQL (ou outro banco, configurável)

---

## 🚀 Instalação

### 1. Clone o Repositório

git clone https://github.com/duckbrave/agendador-tarefa.git

cd agendador-tarefa

cd agendador (Local onde está o projeto e onde deve estara rodando composer)

### 2. Instale as Dependências

```composer install```

```composer require cakephp/authentication```

```bin/cake migrations migrate ```

### 3. Configure o Banco de Dados

- Crie um banco de dados PostgreSQL chamado `agendador`.
- Copie o arquivo de configuração:

cp config/app_local.php
cp config/app.php


- Edite config/app_local.php com suas credenciais:

  ```  'Datasources' => [
        'default' => [
            'host' => 'localhost',
            'username' => 'SEU_USUARIO_POSTGRES',
            'password' => 'SUA_SENHA_POSTGRES',
            'database' => 'agendador',
        ],
    ],```

Edite config/app.php com suas credenciais:

    'Datasources' => [
        'default' => [
            'host' => 'localhost',
            'username' => 'SEU_USUARIO_POSTGRES',
            'password' => 'SUA_SENHA_POSTGRES',
            'database' => 'agendador',
        ],
    ],

### 4. Execute as Migrações

bin/cake migrations migrate

### 5. Inicie o Servidor de Desenvolvimento

bin/cake server

Acesse: http://localhost:8765

---

## 💡 Como Usar a Aplicação

1. Acesse http://localhost:8765 no navegador.
2. Crie uma conta clicando em "Criar uma conta".
3. Faça login com suas credenciais.
4. Gerencie suas tarefas (criar, editar, excluir).
5. Use "Sair" para sair.

---

## 🧩 Estrutura do Projeto

config/           → Arquivos de configuração (app.php, app_local.php, routes.php)  
src/Controller/   → Controladores (TasksController, UsersController)  
src/Model/        → Entidades e Tabelas (Task.php, User.php, TasksTable.php, UsersTable.php)  
templates/        → Views da aplicação  
webroot/          → Assets públicos (CSS, JS)  

---

## 📄 Licença

Este projeto é referente trabalho de programação 3

---

Desenvolvido Guilherme Morigi, Ivan Silva, Thiago Emanuel (https://github.com/duckbrave) usando CakePHP 5.x
