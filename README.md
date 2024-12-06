
# API Challenge - Gerenciamento de Tarefas

Este projeto é uma API REST para gerenciar uma lista de tarefas, implementada utilizando **Laravel**. Ele foi desenvolvido para atender ao desafio técnico da Poli-Digital

---

## 📋 Funcionalidades

- **CRUD de Tarefas**:
  - Criar, listar, visualizar, atualizar e excluir tarefas.
- **Detalhes de cada tarefa**:
  - `id`: UUID gerado automaticamente.
  - `title`: Campo obrigatório (texto).
  - `description`: Campo opcional (texto longo).
  - `status`: Enum (`pending`, `in_progress`, `completed`).
  - Timestamps (`created_at`, `updated_at`).
- **Filtros**:
  - Permite filtrar tarefas pelo `status`.
- **Validação de Dados**:
  - Garante consistência e segurança dos dados recebidos.
- **Mensagens de Erro**:
  - Responde com mensagens claras e códigos HTTP apropriados.

---

## 🚀 Instalação e Configuração

### Pré-requisitos

- **PHP** >= 8.0
- **Composer**
- **MySQL**
- **XAMPP** (opcional, para rodar o projeto localmente)

### Passos para Configuração

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-repositorio/api-challenge.git
   cd api-challenge
   ```

2. Instale as dependências:
   ```bash
   composer install
   ```

3. Configure o arquivo `.env`:
   - Copie o arquivo `.env.example` para `.env`:
     ```bash
     cp .env.example .env
     ```
   - Configure as variáveis do banco de dados:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=api_challenge
     DB_USERNAME=seu_usuario
     DB_PASSWORD=sua_senha
     ```

4. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

5. Configure as migrações:
   ```bash
   php artisan migrate
   ```

6. Inicie o servidor:
   ```bash
   php artisan serve
   ```

   Acesse [http://127.0.0.1:8000](http://127.0.0.1:8000).

---

## 🛠️ Uso

### Endpoints

| Método | Endpoint          | Descrição               |
|--------|-------------------|-------------------------|
| GET    | `/api/tasks`      | Lista todas as tarefas. |
| GET    | `/api/tasks/{id}` | Detalhes de uma tarefa. |
| POST   | `/api/tasks`      | Cria uma nova tarefa.   |
| PUT    | `/api/tasks/{id}` | Atualiza uma tarefa.    |
| DELETE | `/api/tasks/{id}` | Exclui uma tarefa.      |

### Exemplo de Requisição

#### Criar uma Tarefa

- **Endpoint**: `POST /api/tasks`
- **Corpo (JSON)**:
  ```json
  {
      "title": "Nova Tarefa",
      "description": "Detalhes da tarefa",
      "status": "pending"
  }
  ```

#### Atualizar uma Tarefa

- **Endpoint**: `PUT /api/tasks/{id}`
- **Corpo (JSON)**:
  ```json
  {
      "status": "completed"
  }
  ```

#### Filtrar Tarefas por Status

- **Endpoint**: `GET /api/tasks?status=pending`

---

## ✅ Testes Automatizados

### Executar os Testes

1. Configure o banco de dados de testes no arquivo `.env.testing`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=api_challenge_testing
   DB_USERNAME=seu_usuario
   DB_PASSWORD=sua_senha
   ```

2. Execute as migrações de teste:
   ```bash
   php artisan migrate --env=testing
   ```

3. Rode os testes:
   ```bash
   php artisan test
   ```

### Testes Incluídos

- **Unidade**: Testes do modelo `Task` para garantir consistência.
- **Feature**: Testes para os endpoints da API.

---

## 📚 Estrutura do Projeto

- **`app`**: Contém os controladores, modelos e lógica do negócio.
- **`routes/api.php`**: Define as rotas para a API.
- **`database/migrations`**: Contém as definições do esquema do banco de dados.
- **`tests/`**: Contém os testes automatizados.

---

## 🔒 Boas Práticas de Segurança

- Validação e sanitização de dados em todos os endpoints.
- Uso de UUIDs para evitar previsibilidade de IDs.

---

## 🛡️ Melhorias Futuras

- Implementar paginação para a listagem de tarefas.
- Adicionar autenticação para proteger os endpoints.

---

## 📄 Licença

Este projeto foi desenvolvido para fins acadêmicos e de avaliação técnica.
